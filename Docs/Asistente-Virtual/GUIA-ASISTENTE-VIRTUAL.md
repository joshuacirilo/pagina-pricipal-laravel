# Guía paso a paso: Asistente virtual con RAG para la universidad

Arquitectura: Laravel (MVC) + PostgreSQL con pgvector + Ollama (embeddings y generación local, sin costo).

---

## 0. Cómo encajan las piezas en tu MVC

| Capa MVC | Rol en el asistente |
|---|---|
| **Model** | `KnowledgeChunk` — representa cada fragmento de contenido vectorizado |
| **Service** (fuera del MVC clásico, pero estándar en Laravel) | `EmbeddingService` (habla con Ollama para vectorizar) y `ChatService` (orquesta búsqueda + generación) |
| **Controller** | `ChatController` — recibe la pregunta del usuario y devuelve la respuesta JSON |
| **Console Command** | `IngestKnowledge` — proceso batch que carga el contenido de la universidad a la base vectorizada (no es parte del ciclo request/response) |

El flujo completo:

```
Usuario pregunta -> ChatController -> ChatService
                                          |
                     1. EmbeddingService.embed(pregunta) -> Ollama
                     2. KnowledgeChunk::nearest(embedding) -> Postgres/pgvector
                     3. Prompt con contexto -> Ollama (genera respuesta)
                                          |
                                   Respuesta JSON -> Usuario
```

---

## 1. Instalar PostgreSQL + pgvector (entorno de desarrollo)

En Ubuntu/WSL:

```bash
sudo apt update
sudo apt install postgresql postgresql-contrib

# Compilar e instalar la extensión pgvector
sudo apt install postgresql-server-dev-16 build-essential git
git clone --branch v0.8.0 https://github.com/pgvector/pgvector.git
cd pgvector
make
sudo make install
```

Crea la base de datos:

```bash
sudo -u postgres psql
CREATE DATABASE universidad;
\q
```

> Si prefieres evitar la compilación manual, Docker es más simple:
> ```bash
> docker run -d --name pg-vector -e POSTGRES_PASSWORD=postgres -p 5432:5432 pgvector/pgvector:pg16
> ```

Avísale a quien administrará el VPS que necesitará este mismo setup en producción (Postgres + extensión pgvector compilada o la imagen Docker `pgvector/pgvector`).

---

## 2. Instalar Ollama (embeddings + generación, gratis y local)

```bash
curl -fsSL https://ollama.com/install.sh | sh

ollama pull nomic-embed-text   # modelo de embeddings (768 dimensiones)
ollama pull qwen2.5:3b         # modelo de generación, buen desempeño en español
```

Verifica que esté corriendo:

```bash
curl http://localhost:11434/api/tags
```

---

## 3. Configurar Laravel

### 3.1 Instalar el paquete de pgvector para PHP

```bash
composer require pgvector/pgvector-php
```

### 3.2 Configurar `.env`

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=universidad
DB_USERNAME=postgres
DB_PASSWORD=postgres

OLLAMA_URL=http://localhost:11434
OLLAMA_EMBEDDING_MODEL=nomic-embed-text
OLLAMA_CHAT_MODEL=qwen2.5:3b
```

### 3.3 Copiar los archivos de este scaffold a tu proyecto

- `database/migrations/2026_08_11_000000_create_knowledge_chunks_table.php`
- `app/Models/KnowledgeChunk.php`
- `app/Services/EmbeddingService.php`
- `app/Services/ChatService.php`
- `app/Http/Controllers/ChatController.php`
- `app/Console/Commands/IngestKnowledge.php`

Y agregar los snippets:

- El contenido de `config/services-snippet.php` dentro de tu `config/services.php`
- El contenido de `routes/api-snippet.php` dentro de tu `routes/api.php`

### 3.4 Correr la migración

```bash
php artisan migrate
```

Esto crea la extensión `vector`, la tabla `knowledge_chunks` y el índice HNSW para búsquedas rápidas.

---

## 4. Cargar el contenido de la universidad (ingesta)

1. Crea una carpeta con archivos `.md` o `.txt`, uno por tema (admisiones, becas, carreras, reglamento, calendario académico, etc.). Te dejé un ejemplo en `knowledge-base-ejemplo/admisiones.md` — copia ese formato: párrafos separados por línea en blanco, cada párrafo se convierte en un fragmento independiente.

2. Corre el comando de ingesta:

```bash
php artisan knowledge:ingest /ruta/a/knowledge-base-ejemplo --category=admisiones
```

Esto:
- Lee cada archivo
- Divide el contenido en fragmentos (~800 caracteres, respetando párrafos)
- Genera el embedding de cada fragmento con Ollama
- Guarda todo en `knowledge_chunks`

Repite el comando por cada carpeta/categoría de contenido que tengas (becas, carreras, reglamento...).

---

## 5. Probar el endpoint

Con el servidor de Laravel corriendo (`php artisan serve`):

```bash
curl -X POST http://localhost:8000/api/chat \
  -H "Content-Type: application/json" \
  -d '{"question": "¿Cuándo son las fechas de inscripción?"}'
```

Respuesta esperada:

```json
{
  "answer": "Las inscripciones para el primer semestre son de enero a febrero...",
  "sources": ["admisiones.md"]
}
```

---

## 6. Frontend (widget de chat)

No es necesario nada especial: un componente simple en Blade/Alpine.js o Vue que haga `fetch('/api/chat', { method: 'POST', body: JSON.stringify({ question }) })` y muestre `answer`. Si quieres, en el siguiente paso te armo ese componente.

---

## 7. Notas para producción (para quien administre el VPS)

- Postgres con la extensión pgvector instalada (o correr Postgres vía la imagen Docker `pgvector/pgvector`).
- Ollama instalado y corriendo como servicio (`systemctl enable ollama`), con los modelos ya descargados (`ollama pull` consume varios GB, mejor hacerlo una vez desde consola, no en cada deploy).
- RAM recomendada: 4-6 GB libres para `qwen2.5:3b`, aparte de lo que consuma PHP/Postgres.
- El `OLLAMA_URL` en producción normalmente sigue siendo `http://localhost:11434` si Ollama corre en el mismo servidor que Laravel.
- Considerar correr `knowledge:ingest` como parte del proceso de deploy o como comando manual cada vez que actualicen contenido institucional (no necesita correr en cada request).

---

## 8. Próximos pasos posibles

- Agregar un historial de conversación (múltiples turnos) guardando el contexto previo en sesión.
- Panel de administración para que personal no técnico suba/actualice el contenido del asistente sin tocar código.
- Métricas: guardar las preguntas sin buena respuesta (`sources` vacío) para detectar huecos de contenido.
