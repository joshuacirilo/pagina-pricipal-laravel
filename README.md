# UMG Guastatoya - Portal Laravel

Portal institucional de la **Universidad Mariano Gálvez de Guatemala, sede Guastatoya**. Laravel Blade sobre un template LMS (DreamsLMS), recubierto con tema UMG.

Este README es la fuente de contexto para que un agente de IA continúe el trabajo de frontend.

---

## Continuidad (sesión actual — 2026-08-12)

### Rol acordado

- Senior frontend. Responder siempre en **español**.
- En todo trabajo de UI: seguir `.cursor/rules/ui-ux-pro-max.mdc` y leer `.cursor/skills/ui-ux-pro-max/SKILL.md`.
- Workflow UI: `python .cursor/skills/ui-ux-pro-max/scripts/search.py "<query>" --design-system -p "Nombre" --stack laravel` (Windows: `python`, no `python3`).
- Complementar con `--domain` (style, color, typography, ux, landing, icons) y `--stack laravel`.
- Stack real: Laravel Blade + CSS/JS existentes. **No asumir React/Next** salvo pedido.
- No commitear ni pushear salvo pedido explícito.
- Antes de explorar código: `graphify query "..."` (grafo en `graphify-out/`). Tras editar: `graphify update .`.

### Qué se hizo en esta línea de trabajo (home / admisión)

1. Se quitaron del home bloques LMS: coordinador, egresados, eventos, frases, noticias, métricas rotas y el bloque `share-knowledge` («¿Por qué estudiar…?»).
2. Se emigró la landing Astro de `ideas/umgguastatoyagt (1)/umgguastatoyagt/` a Blade como `<x-umg-sistemas-landing />` (nombre histórico; el copy ya es **universidad / admisión**, no solo Ingeniería en Sistemas).
3. Hero de admisión reescrito con foco en **ventana crítica** (countdown + CTA).
4. Secciones `#valor`, `#futuro`, `#evento` reescritas con copy UMG general (tomado del antiguo «¿Por qué estudiar…?»).
5. **Scroll por pantalla completa** en home (`html.umg-home-scroll` + CSS `scroll-snap`).
6. Pre-footer «¿Listo para lo que sigue?» **oculto solo en home**; otras páginas lo conservan.
7. Última pantalla del home: **contacto 60dvh + footer 40dvh**.
8. Formulario `#contacto` rediseñado (solo frontend): layout lineal, toggle **Correo | WhatsApp**, CTA rojo destacado. Backend `POST /contacto` ya existe; el toggle UI mueve `name="contacto"` al input activo.

### Incidente previo (recuperación)

Un agente anterior rompió el tree (imágenes, landings). Baseline bueno conocido: commit **`6566b04`**. Si Laravel no arranca por `helpers.php` fantasma en autoload, ver sección Git / autoload más abajo. **No borrar** `public/build/img` «para limpiar».

---

## Cómo correrlo

```bash
php artisan serve
```

Home: `http://127.0.0.1:8000/` → vista `JOSHUA.index-3`, ruta `index-3`.

Opcional en `.env`:

```env
# COUNTDOWN_DEADLINE=2026-08-13T23:59:59-06:00
```

Si está vacío, el countdown usa 48 h desde la carga de la página.

---

## Stack

- Laravel Blade (`resources/views/`)
- CSS/JS del template (Bootstrap, jQuery, Owl, AOS) + overrides UMG
- Tema UMG: `public/build/css/umg-theme.css` (**fuente de verdad**; no `resources/css/umg-theme.css`)
- Landing admisión: `public/build/css/umg-sistemas-landing.css` (scoped bajo `.umg-sistemas-landing`)
- Fuentes landing: Inter + Space Grotesk + JetBrains Mono (Google Fonts, solo en `index-3`)

---

## Marca (obligatorio)

Tokens en `:root` de `umg-theme.css`:

| Token | Valor |
|-------|--------|
| Navy | `#0B2A52` / `#1A3F73` |
| Rojo CTA | `#AA1E23` / `#C62828` |
| Oro | `#C6A256` |
| Texto | `#1A1D21` |
| Fuentes globales | Montserrat (UI) + Merriweather (titulares) |

Landing admisión usa su propia paleta scoped (`--sis-navy`, `--sis-red`, etc.) sin pisar el tema global.

Reglas UI: iconos SVG (nunca emoji), hover 150–300 ms, contraste ≥ 4.5:1, `prefers-reduced-motion`, breakpoints 375 / 768 / 1024 / 1440. Evitar purple/pink AI y patrones AVOID del design system.

### Design systems en repo

- `design-system/umg-derecho/MASTER.md`
- `design-system/umg-derecho/pages/derecho.md` (pisa el Master)
- `config/umg-faculties.php`

---

## Home — estado actual

Archivo: `resources/views/JOSHUA/index-3.blade.php`

```
Hero parallax → Facultades → Landing admisión → Footer
```

| Orden | Bloque | Notas |
|------:|--------|--------|
| 1 | `<x-umg-parallax-hero />` | Campus, overlay navy, CTAs Admisión / Pago / Tour. `100dvh` + snap |
| 2 | `<x-umg-faculties />` | 6 cards. `100dvh` + snap, centrado vertical |
| 3 | `<x-umg-sistemas-landing />` | Ver tabla de secciones abajo |
| 4 | Footer `#umgFooter` | En home: **40dvh** (última pantalla junto a contacto) |

**No** se muestra en home: `<x-umg-prefooter-cta />` (condicional en `mainlayout`).

### Scroll por pantalla (`html.umg-home-scroll`)

- Clase en `<html>` solo en `index-3` (`mainlayout.blade.php`).
- Reglas en `umg-theme.css` + alturas en `umg-sistemas-landing.css`.
- Snap: `scroll-snap-type: y mandatory` + `scroll-snap-stop: always`.
- Secciones full: `100dvh` (excepto última pantalla).
- Última pantalla: `#contacto` **60dvh** + footer **40dvh**.
- `prefers-reduced-motion`: desactiva snap y smooth scroll.
- Anclas respetan `--header-h` vía `scroll-padding-top` / `scroll-margin-top`.

### Landing admisión (`umg-sistemas-landing`) — secciones internas

| ID | Rol | Copy / comportamiento |
|----|-----|------------------------|
| Header interno `.topbar` | Sticky local | Brand «Admisión abierta · Sede Guastatoya»; nav a `#valor` `#futuro` `#evento` `#contacto` |
| `#hero` | Urgencia | «Tu lugar en la UMG se define en estas horas.» + countdown «Ventana crítica» + metas Calidad/Docentes/Valores |
| `#valor` | Por qué UMG | 4 cards: Calidad, Docentes, Infraestructura, Valores |
| `#futuro` | Formación | Split + stats Oportunidades / Comunidad / Admisión |
| `#evento` | Callout admisión | Ya **no** es Evento Tecnológico de Sistemas; CTA a `#contacto` |
| `#contacto` | Lead form | Título: «Pedí información…» (**sin** eyebrow «Inscripción e información»). Form lineal + toggle Correo/WhatsApp |

Footer interno de la landing Astro **eliminado** (evita doble footer).

### Formulario de contacto (frontend)

- Markup: `resources/views/components/umg-sistemas-landing.blade.php` (`#contacto`)
- Estilos: `.contact-form--linear`, `.contact-channel__*` en `umg-sistemas-landing.css`
- JS: `public/build/js/umg-sistemas-contact.js` (toggle mueve `name="contacto"` / `required` al input visible)
- Backend ya cableado: `POST /contacto` → `ContactController@store` → modelo `Lead` / tabla `leads`
- Validación: `StoreLeadRequest` (`nombre`, `contacto`, `interes` in: inscripcion|informacion|evento)
- **Pendiente backend (si el usuario lo pide):** persistir `contacto_tipo` (email/whatsapp), validar formato según canal, email opcional al admin

### Assets landing

- `public/images/logo-umg.png`
- `public/images/hero-umg.png`
- `public/images/umg-seal.svg` (no usado en UI actual)
- Referencia original: `ideas/umgguastatoyagt (1)/umgguastatoyagt/README.md` + `src/pages/index.astro`

### Archivos clave home

| Archivo | Uso |
|---------|-----|
| `resources/views/JOSHUA/index-3.blade.php` | Home |
| `resources/views/layout/mainlayout.blade.php` | Layout; `umg-home-scroll`; pre-footer omitido en home |
| `resources/views/layout/partials/header.blade.php` | Nav; transparente hasta scroll en home |
| `resources/views/layout/partials/footer.blade.php` | Footer UMG |
| `resources/views/components/umg-parallax-hero.blade.php` | Hero campus |
| `resources/views/components/umg-faculties.blade.php` | Grid facultades |
| `resources/views/components/umg-sistemas-landing.blade.php` | Landing admisión |
| `resources/views/components/umg-prefooter-cta.blade.php` | Solo fuera de home |
| `resources/views/components/umg-floating-assistant.blade.php` | Asistente flotante |
| `public/build/css/umg-theme.css` | Tema + scroll-snap home + footer 40dvh |
| `public/build/css/umg-sistemas-landing.css` | Estilos landing (scoped) |
| `public/build/js/umg-home.js` | Parallax hero |
| `public/build/js/umg-sistemas-countdown.js` | Countdown |
| `public/build/js/umg-sistemas-contact.js` | Toggle Correo/WhatsApp |

**Trampas CSS conocidas**

- El tema pinta todos los `<header>`: en facultades usar `<div class="umg-faculties__header">`.
- `section { background: transparent !important }` en el tema: secciones de color necesitan `background: ... !important`.
- Si `umg-sistemas-landing.css` o los JS de landing faltan en disco (p. ej. tras un reset), restaurar desde git: `git show HEAD:public/build/css/umg-sistemas-landing.css`.

---

## Facultades (páginas por grupo)

Vistas en `resources/views/grupo73|74|75/*.blade.php`. Derecho tiene design system y componentes legacy (`umg-derecho-*`, `umg-faculty-derecho.js`).

No reintroducir sin pedido: experimentos del agente fallido (`umg-faculty-landing`, `umg-law-story`, `umg-derecho-story.*` genéricos no pedidos).

---

## Git

- Baseline bueno conocido: **`6566b04`**.
- `.gitignore` incluye `/graphify-out/` y `/.cursor/` (pueden seguir trackeados: `git rm -r --cached graphify-out .cursor` si inflan pushes).
- Antes de cambios grandes: `git status`. Si hay borrados masivos en `public/build/img` → **parar** y `git restore -- public/build/img`.
- Autoload: no añadir `app/helpers.php` sin versionar el archivo. Si Laravel exige un helpers fantasma, limpiar `vendor/composer/autoload_files.php` / `autoload_static.php` o `composer dump-autoload`.

---

## Para el agente (siguiente sesión)

1. Leer este README completo.
2. `graphify query "..."` antes de explorar.
3. UI: skill UI UX Pro Max + `--stack laravel`; tokens UMG; no React.
4. **No romper** scroll-snap del home ni el split 60/40 contacto/footer sin pedirlo.
5. **No reintroducir** secciones LMS quitadas ni el pre-footer en home.
6. Trabajo pendiente típico (confirmar con el usuario):
   - Backend del formulario: tipar email vs WhatsApp, validación, notificaciones.
   - Pulir tipografía/espaciado móvil del scroll (facultades 6 cards pueden desbordar 100dvh).
   - Rediseñar landings de otras facultades (Derecho ya tiene design system).
   - Opcional: renombrar mentalmente/componentes `umg-sistemas-*` a `umg-admision-*` (hoy el nombre es legado).
7. Tras editar: `graphify update .`
8. No commit/push salvo pedido.
9. Si la página “desaparece”: primero autoload + `git status` de imágenes; no reescribir la home desde cero.
