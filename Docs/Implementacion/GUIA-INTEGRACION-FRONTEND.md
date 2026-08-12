# Guía: integrar el asistente virtual en la página

Esto asume que ya tienes funcionando el backend (endpoint `/api/chat`) de la guía anterior. Aquí conectamos ese endpoint con una interfaz visual en tu sitio.

Tu proyecto usa **Vite + Sass puro** (sin Vue/React/Alpine), así que el widget está hecho en **Blade + JavaScript vanilla + SCSS** para encajar directo con lo que ya tienes.

---

## 1. Copiar los archivos a tu proyecto

| Archivo de este scaffold | Destino en tu repo |
|---|---|
| `resources/views/components/chat-widget.blade.php` | `resources/views/components/chat-widget.blade.php` |
| `resources/js/chat-widget.js` | `resources/js/chat-widget.js` |
| `resources/scss/_chat-widget.scss` | `resources/scss/_chat-widget.scss` |

> Blade detecta automáticamente los componentes en `resources/views/components/`, así que no necesitas registrar nada — `<x-chat-widget />` va a funcionar apenas copies el archivo.

---

## 2. Importar los estilos

En tu `resources/scss/main.scss` (el archivo que ya compilas con `npm run sass`), agrega al inicio o donde tengas tus demás imports:

```scss
@import 'chat-widget';
```

Ajusta la variable `$chat-primary` dentro de `_chat-widget.scss` al color institucional de la universidad.

---

## 3. Cargar el JS con Vite

Abre tu `vite.config.js` y agrega `resources/js/chat-widget.js` al arreglo de entradas de `laravel-vite-plugin`:

```js
laravel({
    input: [
        'resources/css/style.css', // lo que ya tengas
        'resources/js/app.js',     // lo que ya tengas
        'resources/js/chat-widget.js', // <- agregar esta línea
    ],
    refresh: true,
}),
```

Y en el layout donde lo vayas a usar, agrega el `@vite` correspondiente (si ya tienes un `@vite([...])` con varias entradas, solo añade la ruta del archivo ahí mismo):

```blade
@vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/chat-widget.js'])
```

---

## 4. Insertar el componente en el layout

Para que el asistente aparezca en **todas las páginas** del sitio, agrégalo una sola vez en tu layout principal (por ejemplo `resources/views/layouts/app.blade.php`), justo antes de cerrar `</body>`:

```blade
    <x-chat-widget />
</body>
</html>
```

Si en cambio solo quieres el asistente en ciertas páginas (ej. solo en el portal de admisiones), inclúyelo únicamente en esas vistas.

---

## 5. Verificar el token CSRF

El JS del widget envía el header `X-CSRF-TOKEN` porque asumimos que `/api/chat` corre dentro del middleware `web` (con sesión). Para que funcione, tu layout necesita el meta tag de CSRF en el `<head>` (Laravel lo incluye por defecto en el layout base, pero confírmalo):

```blade
<meta name="csrf-token" content="{{ csrf_token() }}">
```

**Si en cambio pusiste la ruta en `routes/api.php`** (como en la guía anterior, sin sesión de por medio), el CSRF no aplica y puedes eliminar esa línea del `chat-widget.js` sin problema — el endpoint ya queda fuera del middleware `web`.

---

## 6. Probar

```bash
npm run dev    # o npm run build para producción
npm run sass   # compila los estilos
php artisan serve
```

Abre el sitio, deberías ver el botón flotante en la esquina inferior derecha. Al hacer clic se abre el panel de chat, escribes una pregunta y se envía a `/api/chat`.

---

## 7. Ajustes opcionales

- **Posición del botón**: cambia `right`/`bottom` en `.chat-widget` dentro del SCSS si quieres moverlo (ej. esquina inferior izquierda).
- **Mensaje de bienvenida**: edítalo directamente en `chat-widget.blade.php`, dentro del primer `.chat-widget__message--bot`.
- **Límite de preguntas**: ya está el `throttle:20,1` en la ruta de la guía backend — ajústalo según el tráfico esperado.
- **Historial de conversación**: si más adelante quieres que el asistente recuerde el contexto dentro de la misma sesión de chat, se puede extender `chat-widget.js` para mandar los últimos mensajes junto con la pregunta, y `ChatService` para incluirlos en el prompt.
- **Analítica**: puedes engancharte al evento de envío del formulario en `chat-widget.js` para mandar eventos a Google Analytics o similar y ver qué preguntan más los usuarios.
