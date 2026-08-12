# Guía: cómo escribir el contenido para la base de conocimiento

El comando `php artisan knowledge:ingest` divide cada archivo en fragmentos **por párrafo** (separados por línea en blanco) y genera un embedding de cada fragmento. La calidad de las respuestas del asistente depende casi por completo de cómo estén escritos esos párrafos. Estas son las reglas que hacen la diferencia:

## 1. Un tema por párrafo

Cada párrafo se convierte en una unidad de búsqueda independiente. Si mezclas varios temas en un mismo párrafo, la búsqueda por similitud se vuelve confusa (el embedding "promedia" el significado de todo el párrafo).

❌ Mal:
```
La carrera de Ingeniería en Sistemas dura 5 años y cuesta Q1,200 al mes.
Las clases son de lunes a viernes de 6pm a 9pm. Para inscribirte necesitas
tu título de diversificado y hacer el examen de admisión.
```

✅ Bien (tres párrafos separados):
```
La carrera de Ingeniería en Sistemas tiene una duración de 5 años (10 semestres).

La mensualidad de Ingeniería en Sistemas es de Q1,200. El horario disponible para esta carrera es de lunes a viernes de 6:00pm a 9:00pm (jornada nocturna).

Para inscribirte a Ingeniería en Sistemas necesitas tu título de diversificado y aprobar el examen de admisión.
```

## 2. Escribe como si respondieras la pregunta directamente

El modelo busca el fragmento más parecido semánticamente a la pregunta del usuario. Si el párrafo ya suena como una respuesta completa y autocontenida, mejora mucho la precisión.

❌ Mal: `Duración: 5 años. Modalidad: presencial.`
✅ Bien: `La carrera de Ingeniería en Sistemas dura 5 años y se imparte en modalidad presencial.`

## 3. Repite el nombre completo en cada párrafo relevante

No asumas que el "contexto" de un párrafo anterior se mantiene. Cada fragmento se recupera de forma aislada, así que si hablas de "esta carrera" sin nombrarla, el asistente pierde esa referencia.

❌ Mal: `Esta carrera también ofrece un pénsum de fin de semana.`
✅ Bien: `Ingeniería en Sistemas también ofrece un pénsum de fin de semana para estudiantes que trabajan.`

## 4. Usa sinónimos y variaciones que la gente realmente usa

Los estudiantes no siempre preguntan con el término técnico. Incluye variaciones naturales dentro del texto.

✅ Ejemplo: `El costo mensual (mensualidad, colegiatura) de Medicina es de Q3,500.`

## 5. Tamaño de párrafo: ni muy corto ni muy largo

- Muy corto (una frase suelta) → poco contexto, respuestas pobres.
- Muy largo (más de ~800 caracteres) → el comando lo va a cortar automáticamente a la fuerza en un punto arbitrario.
- Ideal: 2-4 oraciones, un párrafo = una idea completa.

## 6. Organiza los archivos por categoría

Usa la opción `--category` del comando de ingesta para poder identificar después de dónde viene cada respuesta y facilitar actualizaciones futuras:

```bash
php artisan knowledge:ingest ruta/carreras --category=carreras
php artisan knowledge:ingest ruta/admisiones --category=admisiones
php artisan knowledge:ingest ruta/costos --category=costos
php artisan knowledge:ingest ruta/horarios --category=horarios
php artisan knowledge:ingest ruta/informacion-adicional --category=general
```

Sugerencia de estructura de carpetas (ya armada en este scaffold):

```
knowledge-base/
├── carreras/
│   ├── ingenieria-en-sistemas.md
│   ├── medicina.md
│   ├── derecho.md
│   └── ... (un archivo por carrera)
├── admisiones/
│   └── inscripcion.md
├── costos/
│   └── mensualidad-y-costos.md
├── horarios/
│   └── horarios.md
└── informacion-adicional/
    └── informacion-adicional.md
```

## 7. Actualizar contenido más adelante

El comando `knowledge:ingest` **solo agrega** registros nuevos, no actualiza ni borra los existentes. Si cambias un dato (por ejemplo, sube la mensualidad), tienes dos opciones:

- **Simple (recomendado al inicio):** antes de re-correr la ingesta, vacía la tabla con `php artisan tinker` → `App\Models\KnowledgeChunk::truncate();` y vuelve a ingestar todo desde cero.
- **Selectiva:** borra solo los registros de esa categoría/fuente (`KnowledgeChunk::where('source', 'mensualidad-y-costos.md')->delete();`) y vuelve a ingestar solo ese archivo.

## 8. Revisa qué preguntas quedan sin buena respuesta

Con el tiempo, vale la pena registrar las preguntas donde `sources` viene vacío en la respuesta del endpoint — son huecos de contenido que hay que llenar.

---

Ahora llena las plantillas en `knowledge-base-templates/` con la información real de la universidad, siguiendo estas reglas, y luego corre la ingesta como se explicó arriba.
