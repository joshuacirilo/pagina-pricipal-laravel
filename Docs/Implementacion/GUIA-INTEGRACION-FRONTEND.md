# Guía: integrar el asistente virtual en la página

Esto asume que ya tienes funcionando el backend (endpoint `/api/chat`) de la guía anterior. Aquí conectamos ese endpoint con una interfaz visual en tu sitio.

Tu proyecto usa **Vite + Sass puro** (sin Vue/React/Alpine), así que el widget está hecho en **Blade + JavaScript vanilla + SCSS** para encajar directo con lo que ya tienes.

---

## 1. Estado de esta implementación

El widget ya está integrado en este proyecto. Sus archivos fuente son:

| Archivo de este scaffold | Destino en tu repo |
|---|---|
| Componente Blade | `resources/views/components/chat-widget.blade.php` |
| Lógica JavaScript | `resources/js/chat-widget.js` |
| Estilos Sass | `resources/scss/components/_chat-widget.scss` |
| Asset CSS publicado | `public/build/css/chat-widget.css` |
| Asset JS publicado | `public/build/js/chat-widget.js` |

El layout `resources/views/layout/mainlayout.blade.php` incluye `<x-chat-widget />` en las páginas públicas y carga sus dos assets. Las pantallas de acceso, errores y mantenimiento no muestran el widget.

---

## 2. Estilos

El módulo ya está importado desde `resources/scss/main.scss`:

```scss
@use "components/chat-widget";
```

Ajusta `$chat-primary` dentro de `resources/scss/components/_chat-widget.scss` al color institucional. Para regenerar el asset aislado:

```powershell
npm run sass:no-map
npx sass resources/scss/components/_chat-widget.scss:public/build/css/chat-widget.css --style=compressed --no-source-map
```

---

## 3. JavaScript

El layout carga `public/build/js/chat-widget.js`. El widget usa `fetch` nativo y no requiere dependencias externas ni una entrada Vite adicional.

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

## 5. CSRF

La ruta `POST /api/chat` está en `routes/api.php`; no usa sesión ni CSRF. El JavaScript no envía un token CSRF.

---

## 6. Probar

```powershell
npm run sass:no-map
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
