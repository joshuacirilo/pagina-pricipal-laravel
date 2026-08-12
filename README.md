# UMG Guastatoya - Portal Laravel

Portal institucional de la **Universidad Mariano Gálvez de Guatemala, sede Guastatoya**. Laravel Blade sobre un template LMS (DreamsLMS), recubierto con tema UMG.

Este README es la fuente de contexto para continuar el trabajo de frontend.

## Cómo correrlo

```bash
php artisan serve
```

Home: `http://127.0.0.1:8000/` (`/` apunta a la vista `JOSHUA.index-3`, ruta `index-3`).

## Stack

- Laravel Blade (`resources/views/`)
- CSS/JS existentes (Bootstrap, jQuery, Owl, AOS)
- Tema UMG: `public/build/css/umg-theme.css` (se carga al final del layout; es la fuente de verdad, no `resources/css/umg-theme.css`)
- No usar React/Next salvo que se pida

## Marca (obligatorio)

Tokens en `:root` de `umg-theme.css`:

- Navy: `#0B2A52` / `#1A3F73`
- Rojo CTA: `#AA1E23` / `#C62828`
- Oro: `#C6A256`
- Texto: `#1A1D21`
- Fuentes: Montserrat (UI) + Merriweather (titulares globales)

En hero/CTA cinematográficos se usa Montserrat, título blanco, botones píldora rojos (`.umg-hero-btn`).

Reglas UI: skill `.cursor/skills/ui-ux-pro-max/SKILL.md` y regla `.cursor/rules/ui-ux-pro-max.mdc`. Iconos SVG, hover 150-300 ms, contraste >= 4.5:1, `prefers-reduced-motion`, breakpoints 375 / 768 / 1024 / 1440. Evitar gradientes AI purple/pink.

## Home - estado actual

Orden de la página:

1. **Hero parallax** - `<x-umg-parallax-hero />` (foto campus, overlay navy, 3 CTAs: Admisión / Pago / Tour)
2. **Facultades** - `<x-umg-faculties />` (6 cards: Derecho, Administración, Criminología, Sistemas, Trabajo Social, Auditoría)
3. **Landing admisión UMG** - `<x-umg-sistemas-landing />` (hero + countdown, por qué UMG, formación, callout admisión, contacto + form)
4. **Footer UMG** - `layout/partials/footer.blade.php` (navy, logo en recuadro blanco, columnas Contacto / Facultades / Universidad)

Se quitaron del home: coordinador, egresados, eventos, frases, noticias, métricas `.student-course` y bloque LMS `share-knowledge` (copy migrado a la landing).

### Landing Sistemas (referencia)

- Contrato / copy: `ideas/umgguastatoyagt (1)/umgguastatoyagt/README.md`
- Componente: `resources/views/components/umg-sistemas-landing.blade.php`
- CSS scoped: `public/build/css/umg-sistemas-landing.css`
- Countdown: `public/build/js/umg-sistemas-countdown.js` (48 h o `COUNTDOWN_DEADLINE` en `.env`)
- Assets: `public/images/logo-umg.png`, `hero-umg.png`, `umg-seal.svg`
- Form: `POST /contacto` → `ContactController@store` → tabla `leads`

### Archivos clave

- `resources/views/JOSHUA/index-3.blade.php` - Home
- `resources/views/layout/mainlayout.blade.php` - Layout; `body.umg-home` en `/`; `lang="es"`
- `resources/views/layout/partials/header.blade.php` - Nav; en home es fijo y transparente hasta scroll
- `resources/views/components/umg-*.blade.php` - Hero, facultades, sistemas landing, pre-footer, asistente flotante
- `resources/views/components/umg-floating-assistant.blade.php` - Widget robot fijo (contacto + CTA admisiones); mascota: `public/images/mascota-digital.png`
- `public/build/js/umg-home.js` - Parallax del hero (`prefers-reduced-motion`)
- `public/build/js/umg-floating-assistant.js` - Abrir/cerrar panel y tip del asistente
- `public/build/css/umg-theme.css` - Estilos UMG (incluye overrides de header genérico)
- `public/build/css/umg-floating-assistant.css` - Estilos del asistente flotante

Cuidado: el CSS del tema pinta todos los `<header>`. En facultades se usa `<div class="umg-faculties__header">` para no heredar el nav azul.

También: `section { background: transparent !important }` en el tema; secciones de color (coordinador, pre-footer) necesitan `background: ... !important`.

## Git

`.gitignore` incluye `/graphify-out/` y `/.cursor/`.

Importante: esas carpetas ya estaban trackeadas. El ignore no basta; hay que sacarlas del índice para que dejen de inflar los push:

```bash
git rm -r --cached graphify-out .cursor
```

Casi todos los miles de cambios hacia GitHub son cache AST de Graphify, no la home.

## Para el agente (siguiente sesión)

1. Rol: senior frontend. Responder en español.
2. Antes de explorar código: `graphify query "..."` (grafo en `graphify-out/`; si no existe, se puede construir).
3. UI: leer skill UI UX Pro Max; `--design-system` + `--stack laravel`; no asumir React.
4. Seguir rediseñando la home por bloques pendientes del template LMS, mismo lenguaje visual que hero/facultades/footer.
5. Tras editar codigo: `graphify update .`
6. No commitear ni pushear salvo que el usuario lo pida.
