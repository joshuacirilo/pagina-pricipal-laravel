# UMG Guastatoya - Portal Laravel

Portal institucional de la **Universidad Mariano Gálvez de Guatemala, sede Guastatoya**. Laravel Blade sobre un template LMS (DreamsLMS), recubierto con tema UMG.

Este README es la fuente de contexto para que un agente de IA continúe el trabajo de frontend.

---

## Continuidad (sesión actual — 2026-08-13)

### Rol acordado

- Senior frontend. Responder siempre en **español**.
- En todo trabajo de UI: seguir `.cursor/rules/ui-ux-pro-max.mdc` y leer `.cursor/skills/ui-ux-pro-max/SKILL.md`.
- Workflow UI: `python .cursor/skills/ui-ux-pro-max/scripts/search.py "<query>" --design-system -p "Nombre" --stack laravel` (Windows: `python`, no `python3`).
- Complementar con `--domain` (style, color, typography, ux, landing, icons) y `--stack laravel`.
- Stack real: Laravel Blade + CSS/JS existentes. **No asumir React/Next** salvo pedido.
- Tokens UMG **siempre ganan** sobre el output del skill (navy/oro/rojo, Merriweather + Montserrat; no purple Soft UI / Satoshi).
- No commitear ni pushear salvo pedido explícito.
- Antes de explorar código: `graphify query "..."` (grafo en `graphify-out/`). Tras editar: `graphify update .`.

### Foco actual: Facultad de Trabajo Social (+ Derecho como referencia)

También activa: **Trabajo Social** (`/grupo75/trabajo-social`). Mismo patrón: story + pensum + FAQ.

**Orden de página Trabajo Social** — `resources/views/grupo75/trabajo-social.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-trabajo-social-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

Fotos story: `public/images/trabajo-social/` (renombrada desde `trabajo social`; 4 archivos; escena 05 reutiliza hook).
Design system: `design-system/umg-trabajo-social/pages/trabajo-social.md`.
Instructors: rutas/vistas conservadas, **no** en la página.

### Foco actual: Facultad de Sistemas (+ Derecho como referencia)

También activa: **Sistemas** (`/grupo73/sistemas`). Mismo patrón: story + pensum + FAQ.

**Orden de página Sistemas** — `resources/views/grupo73/sistemas.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-sistemas-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

Fotos story: `public/images/sistemas/` (4 archivos; escena 05 reutiliza la de formación).
Design system: `design-system/umg-sistemas/pages/sistemas.md` (tokens UMG ganan).
Instructors: rutas/vistas conservadas, **no** en la página.
**No tocar** landing de admisión del home (`umg-sistemas-landing`).

### Foco actual: Facultad de Criminología (+ Derecho como referencia)

También activa: **Criminología** (`/grupo74/criminologia`). Mismo patrón: story + pensum + FAQ.

**Orden de página Criminología** — `resources/views/grupo74/criminologia.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-criminologia-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

Fotos story: `public/images/criminologia/`.
Design system: `design-system/umg-criminologia/pages/criminologia.md` (tokens UMG ganan).
Instructors: rutas/vistas conservadas, **no** en la página.

### Foco actual: Facultad de Auditoría (+ Derecho / Administración como referencia)

También activa: **Auditoría** (`/grupo75/auditoria`). Mismo patrón: story + pensum + FAQ.

**Orden de página Auditoría** — `resources/views/grupo75/Auditoria.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-auditoria-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

Fotos story: `public/images/Auditoria/`.
Design system: `design-system/umg-auditoria/pages/auditoria.md` (tokens UMG ganan).
Instructors: rutas/vistas conservadas, **no** en la página.

### Foco actual: Facultad de Administración (+ Derecho como referencia)

La conversación activa puede estar en **Administración** (`/grupo74/administracion`) o **Derecho** (`/grupo74/derecho`). Mismo patrón de página: story + pensum + FAQ.

**Orden de página Administración** — `resources/views/grupo74/administracion.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-administracion-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

Fotos story: `public/images/administracion/`.
Design system: `design-system/umg-administracion/pages/administracion.md` (tokens UMG ganan).
Instructors: rutas/vistas conservadas, **no** en la página.

### Foco Derecho (referencia estable)

La conversación activa está en **Derecho** (`/grupo74/derecho`), no en el home. Objetivo: **atrapar** e **informar** (story + pensum + FAQ útil).

**Orden de página actual (real)** — `resources/views/grupo74/derecho.blade.php`:

```
Story (5 escenas, full-bleed bajo header)
  → Banda umg-derecho-band: Pensum 90% + Stats 10% (1 viewport)
  → FAQ rediseñado (1 viewport)
  → (prefooter global)
```

**Decisiones cerradas con el usuario**

1. Story reemplaza hero + intro; features/topics fuera de la página (info en las 5 slides).
2. Exactamente **5 slides**; fotos en `public/images/derecho/`.
3. GSAP local en `public/build` (no Vite build a ciegas; no CDN).
4. Solo ruta `derecho` — no tocar otras facultades ni home salvo pedido.
5. **Instructors fuera de la página** (sección “Cuerpo académico” quitada). Blade `umg-derecho-instructors` + rutas `detalles-instructor-derecho*` **se conservan** para uso futuro.
6. En su lugar: **pensum mock en estilo abanico** (`<x-umg-derecho-pensum />`).
7. CTA slide 05: “Ver pensum” → `#umg-derecho-pensum` (ya no “Ver catedráticos”).
8. Cada ciclo del pensum muestra **dos tarjetas**: Semestre 1 y Semestre 2 (datos mock en config).
9. Click en abanico: rota slots; click en activa → siguiente ciclo; pista “Haz click en las tarjetas” (se oculta al interactuar).
10. Stats **unidos** al pensum en una sola pantalla: **90% pensum / 10% stats** (wrapper `.umg-derecho-band`).
11. FAQ visualmente reforzado (eyebrow píldora, acordeones numerados, badge en foto, CTA admisiones).
12. Post-story a pantallas tipo home (`min-height` viewport) pero **sin** `scroll-snap` (rompe el scrub del story).
13. Story sticky: `top: 0` + `height: 100dvh` (full-bleed bajo header fijo). **No** volver a `top: var(--header-h)` — dejaba hueco navy entre header y primera slide.
14. `body.umg-faculty-page`: padding/main-wrapper en 0; header fijo (patrón home).

**Escenas del story** (`config/umg-derecho-story.php`)

| ID | Nº | Rol | Contenido |
|----|----|-----|-----------|
| `hook` | 01 | Atrapar | ¿Por qué estudiar Derecho? + points |
| `aprender` | 02 | Formación | ¿Qué aprenderás? + words + points |
| `ingreso` | 03 | Ingreso | Perfil de ingreso + points |
| `egreso` | 04 | Egreso | Perfil de egreso + points |
| `comienza` | 05 | CTA | Admisión; CTAs → `#umg-derecho-pensum` + admisiones UMG |

**Pensum abanico**

| Pieza | Archivo |
|-------|---------|
| Datos (5 ciclos × 2 semestres mock) | `config/umg-derecho-pensum.php` |
| Blade | `resources/views/components/umg-derecho-pensum.blade.php` |
| CSS | `public/build/css/umg-derecho-pensum.css` |
| JS (tabs + rotación slots) | `public/build/js/umg-derecho-pensum.js` |
| Stats | `resources/views/components/umg-derecho-stats.blade.php` (`id="umg-derecho-stats"`) |
| Layout 90/10 | wrapper `.umg-derecho-band` en `derecho.blade.php` + reglas en `umg-derecho-page.css` |

- Desktop ≥992px: cartas en abanico (`--pensum-slot`); panel derecho = 2 semestres lado a lado.
- Móvil: lista; banda puede crecer (pensum ~75dvh + stats auto).
- Disclaimer mock: **eliminado** a pedido del usuario.
- Encabezado pensum: centrado horizontalmente.

**FAQ “Información útil”**

| Pieza | Archivo |
|-------|---------|
| Blade | `resources/views/components/umg-derecho-faq.blade.php` |
| CSS scoped | `public/build/css/umg-derecho-faq.css` |

- Grid con imagen centrada verticalmente (`align-items: center`).
- Acordeones tipo tarjeta + números oro + icono +/− SVG.
- CTA navy “Ir a admisiones” al final.

**Pantallas / CSS de página**

| Pieza | Archivo |
|-------|---------|
| Viewport band + FAQ screen | `public/build/css/umg-derecho-page.css` |
| Links CSS Derecho | `mainlayout.blade.php` si `Route::is(['derecho'])`: story → pensum → faq → **page** |
| Scripts | `footer-scripts`: GSAP → story → **pensum** → faculty-derecho |

**Look del story (estado actual)**

- Desktop ≥992px: sticky stack full-bleed (`top: 0`, `100dvh`); grid imagen \| panel navy.
- Eyebrow oro claro; número oro; título blanco Merriweather; body `#EEF3F9`.
- Fondos card opacos `#0b2a52 !important`.
- Cover: **solo** `[data-story-dim]` sobre la foto. Prohibido `scale`/`opacity`/`filter` en `.umg-derecho-story__card-inner`.
- ScrollTrigger active/cover: `start/end: "top top"` (alineado al sticky full-bleed).

**Bugs resueltos — no reintroducir**

1. Texto ilegible (navy sobre navy) → overrides `.umg-faculty .umg-derecho-story h*` + hex `!important`.
2. Texto acumulado / sticky transparente → comentario CSS con `*/` embebido; fondos opacos.
3. Flash negro entre escenas → no animar card-inner entero.
4. Hueco navy entre header y 1ª slide → era `top: header-h` + header fijo; fix full-bleed `top: 0` / `100dvh` + padding faculty-page 0.

**Feedback reciente del usuario (esta conversación)**

- Quitar cuerpo académico → poner pensum abanico.
- Abanico con click que cambia tarjetas + pista “haz click”.
- Centrar título del pensum; quitar disclaimer mock.
- Panel derecho: Semestre 1 **y** Semestre 2 por ciclo.
- FAQ más llamativo visualmente.
- Secciones a pantalla completa (ref. home); luego juntar stats al pensum 90/10.
- Centrar imagen del FAQ verticalmente.
- Quitar espacio entre header y primera slide.

**Pendiente / siguiente paso típico (confirmar con el usuario)**

- Hard refresh y validar en desktop/móvil: story sin hueco, abanico usable, banda 90/10 legible (stats muy compactos en 10%), FAQ OK.
- Si stats en 10% se ven apretados: subir a ~12–15% o tipografía aún más densa.
- Copy/escenas o pensum oficial real (hoy es mock).
- Afinar `object-position` de fotos del story.
- Mismo patrón en otras facultades solo si pide + set de 5 fotos.
- Components legacy en disco sin uso en página: hero, intro, features, topics, instructors.

### Qué se hizo antes (home / admisión) — contexto, no reabrir sin pedir

1. Se quitaron del home bloques LMS: coordinador, egresados, eventos, frases, noticias, métricas rotas y el bloque `share-knowledge`.
2. Landing Astro emigrada a `<x-umg-sistemas-landing />` (copy universidad / admisión).
3. Scroll por pantalla (`html.umg-home-scroll` + snap); contacto 60dvh + footer 40dvh; pre-footer oculto solo en home.
4. Formulario `#contacto` frontend (toggle Correo|WhatsApp); backend `POST /contacto` existe.
5. Motion propio del home (`umg-home-motion.js`); **no** instalar `bertux77/laravel-inview-animations`.

### Preferencias de motion del usuario

- **Atrapar**: deliberado / cinematográfico, no micro-transiciones de 300 ms.
- Home: reveals al **llegar** a cada pantalla (scroll-snap).
- Derecho: scroll-driven con `scrub: true`; sin flash negro; sin texto acumulado; **sin** scroll-snap de página.
- Respetar `prefers-reduced-motion`.

### Incidente previo (recuperación)

Un agente anterior rompió el tree (imágenes, landings). Baseline bueno conocido: commit **`6566b04`**. Si Laravel no arranca por `helpers.php` fantasma en autoload, ver sección Git / autoload. **No borrar** `public/build/img` «para limpiar».

---

## Cómo correrlo

```bash
php artisan serve
```

| Página | URL | Ruta name |
|--------|-----|-----------|
| Home | `http://127.0.0.1:8000/` | `index-3` |
| Derecho | `http://127.0.0.1:8000/grupo74/derecho` | `derecho` |
| Administración | `http://127.0.0.1:8000/grupo74/administracion` | `administracion` |
| Auditoría | `http://127.0.0.1:8000/grupo75/auditoria` | `auditoria` |
| Criminología | `http://127.0.0.1:8000/grupo74/criminologia` | `criminologia` |
| Sistemas | `http://127.0.0.1:8000/grupo73/sistemas` | `sistemas` |
| Trabajo Social | `http://127.0.0.1:8000/grupo75/trabajo-social` | `trabajo-social` |

Tras editar CSS/JS en `public/build`: **hard refresh** (`Ctrl+F5`).

Opcional en `.env` (solo home countdown):

```env
# COUNTDOWN_DEADLINE=2026-08-13T23:59:59-06:00
```

---

## Stack

- Laravel Blade (`resources/views/`)
- CSS/JS del template (Bootstrap, jQuery, Owl, AOS) + overrides UMG
- Tema UMG: `public/build/css/umg-theme.css` (**fuente de verdad**; no `resources/css/umg-theme.css`)
- Assets UMG se editan en `public/build/` y se cargan con `<script>` / `<link>` condicionales (no asumir `@vite` para features UMG)
- **No** correr `npm run build` a ciegas: el `outDir` es `public/build/` y puede vaciar imágenes/CSS del tema
- Dependencia npm añadida: `gsap` (copiada a `public/build/js/vendor/`)

---

## Marca (obligatorio)

Tokens en `:root` de `umg-theme.css`:

| Token | Valor |
|-------|--------|
| Navy | `#0B2A52` / `#1A3F73` |
| Rojo CTA | `#AA1E23` / `#C62828` |
| Oro | `#C6A256` (story también usa oro claro `#E2C57A` para labels) |
| Texto | `#1A1D21` |
| Fuentes globales | Montserrat (UI) + Merriweather (titulares) |

Reglas UI: iconos SVG (nunca emoji), hover 150–300 ms, contraste ≥ 4.5:1, `prefers-reduced-motion`, breakpoints 375 / 768 / 1024 / 1440. Evitar purple/pink AI.

### Design systems en repo

- `design-system/umg-derecho/MASTER.md` (defaults skill; **no pisan** marca UMG)
- `design-system/umg-derecho/pages/derecho.md` (**pisa** el Master; ritmo = story → banda pensum 90% + stats 10% → FAQ)
- `config/umg-faculties.php` (datos largos de carrera; features/topics/instructors ya no se renderizan en Derecho)
- `config/umg-derecho-story.php` (5 escenas del story)
- `config/umg-derecho-pensum.php` (mock: 5 ciclos × 2 semestres)

---

## Derecho — detalle técnico

Ruta: `/grupo74/derecho` · vista: `grupo74.derecho` · `body.umg-faculty-page`

### Arquitectura

| Pieza | Archivo |
|-------|---------|
| Página | `resources/views/grupo74/derecho.blade.php` |
| Story wrapper | `resources/views/components/umg-derecho-story.blade.php` |
| Story card | `resources/views/components/umg-derecho-story-card.blade.php` |
| Datos escenas | `config/umg-derecho-story.php` |
| CSS story | `public/build/css/umg-derecho-story.css` |
| JS story runtime | `public/build/js/umg-derecho-story.js` |
| JS story espejo | `resources/js/animations/umg-derecho-story.js` (mantener sync) |
| Pensum | Blade + `config/umg-derecho-pensum.php` + `umg-derecho-pensum.css/js` |
| Stats | `umg-derecho-stats.blade.php` (dentro de `.umg-derecho-band`) |
| FAQ | `umg-derecho-faq.blade.php` + `umg-derecho-faq.css` |
| Layout pantallas | `public/build/css/umg-derecho-page.css` |
| Fotos story | `public/images/derecho/` |
| GSAP vendor | `public/build/js/vendor/gsap.min.js` + `ScrollTrigger.min.js` |
| Reveals post-story | `public/build/js/umg-faculty-derecho.js` (`.umg-reveal`; no dentro del story) |
| CSS links | `mainlayout`: story → pensum → faq → page (solo `derecho`) |
| Scripts | `footer-scripts`: GSAP → story → pensum → faculty-derecho |

### Layout visual

- Story desktop ≥992px: sticky `top: 0`, `100dvh` (full-bleed bajo header fijo); grid imagen \| panel navy.
- Story móvil `<992px`: imagen arriba + panel abajo; sticky off.
- Banda pensum+stats: desktop 90%/10% de `calc(100dvh - header)`; móvil apilado flexible.
- FAQ: 1 viewport; imagen centrada verticalmente con el bloque de preguntas.
- Cover story: `.umg-derecho-story__dim` solo sobre media.

### Trampas (no repetir)

1. **Flash negro:** no `scale`/`opacity`/`filter` en `.umg-derecho-story__card-inner`.
2. **Texto invisible:** overrides vs `.umg-faculty h1/h2/p`.
3. **Texto acumulado:** no `*/` dentro de comentarios CSS; fondos sticky opacos `#0b2a52 !important`.
4. **Hueco header ↔ 1ª slide:** no volver a sticky `top: header-h` en story; mantener full-bleed + `padding-top: 0` en faculty-page.
5. **Imagen rota:** `!important` en `.umg-derecho-story__img` contra `img { height: auto }`.
6. **`npm run build`:** no; vacía `public/build/`.
7. **Doble animación:** no `.umg-reveal` dentro del story.
8. **Hard refresh** tras CSS/JS.
9. **No** re-añadir features/topics/instructors a la página salvo pedido.
10. **No** scroll-snap tipo home en Derecho (rompe scrub).
11. Editar pensum: `config/umg-derecho-pensum.php` + `php artisan config:clear` si hace falta.

### Design system Derecho

Ver `design-system/umg-derecho/pages/derecho.md`.

---

## Home — estado actual (referencia)

Archivo: `resources/views/JOSHUA/index-3.blade.php`

```
Hero parallax → Facultades → Landing admisión → Footer
```

| Orden | Bloque | Notas |
|------:|--------|--------|
| 1 | `<x-umg-parallax-hero />` | `100dvh` + snap + reveal |
| 2 | `<x-umg-faculties />` | 6 cards; puede desbordar en móvil |
| 3 | `<x-umg-sistemas-landing />` | Admisión / countdown / contacto |
| 4 | Footer `#umgFooter` | En home: **40dvh** con contacto 60dvh |

**No** mostrar pre-footer en home. **No** romper scroll-snap ni split 60/40.

### Animaciones del home (motion propio)

| Pieza | Archivo |
|-------|---------|
| Reveals por pantalla | `public/build/js/umg-home-motion.js` |
| CSS `.umg-reveal` lento | `umg-theme.css` scoped `body.umg-home` (~1.15s) |
| Parallax hero | `public/build/js/umg-home.js` |

- Observar secciones, no cada card; no usar `intersectionRatio >= 0.55` en facultades.
- Sin paquetes/CDN de animación de terceros en el home.

### Formulario contacto home

- `POST /contacto` → `ContactController@store` / `Lead`
- Pendiente (si se pide): tipar email vs WhatsApp, validación por canal, notificación admin

---

## Otras facultades

Vistas en `resources/views/grupo73|74|75/*.blade.php`. Facultades con story sticky: **Derecho**, **Administración**, **Auditoría**, **Criminología**, **Sistemas** y **Trabajo Social**.

No reintroducir sin pedido: `umg-faculty-landing`, `umg-law-story` genéricos fallidos de agentes previos.

---

## Git

- Baseline bueno conocido: **`6566b04`**.
- `.gitignore` incluye `/graphify-out/` y `/.cursor/`.
- Antes de cambios grandes: `git status`. Si hay borrados masivos en `public/build/img` → **parar** y `git restore -- public/build/img`.
- Autoload: no añadir `app/helpers.php` sin versionar el archivo.
- Estado típico de esta rama: Derecho (story + pensum + FAQ + page CSS, config, Blade, design-system, README) + imágenes `public/images/derecho/` (pueden estar untracked).

---

## Para el agente (siguiente sesión)

1. Leer este README completo; foco = **Derecho** (story + pensum/stats + FAQ), no reabrir home sin pedido.
2. `graphify query "..."` antes de explorar.
3. UI: skill UI UX Pro Max + `--stack laravel`; tokens UMG de `design-system/umg-derecho/pages/derecho.md`.
4. Story: editar `public/build/css|js/umg-derecho-story.*` y sincronizar espejo en `resources/js/animations/`.
5. Copy/escenas: `config/umg-derecho-story.php`. Pensum: `config/umg-derecho-pensum.php` (+ `config:clear`).
6. **No** `filter`/`opacity`/`scale` en card-inner del story.
7. **No** sticky story con `top: header-h` (vuelve el hueco bajo el header).
8. **No** comentarios CSS con `*/` embebido; **no** fondos transparentes en sticky.
9. **No** `npm run build`; **no** CDN GSAP; **no** scroll-snap en Derecho.
10. **No** romper home scroll-snap / 60-40 / pre-footer.
11. **No** remount features/topics/instructors en la página salvo pedido (archivos en disco OK).
12. Mantener banda `.umg-derecho-band` (pensum 90% + stats 10%) salvo que el usuario pida otro split.
13. Tras editar: `graphify update .`
14. No commit/push salvo pedido.
15. Si “se pone negro” al scrollear: cover del story + hard refresh.
16. Si texto acumulado / fondo blanco: parseo CSS story + fondos opacos.
17. Si texto no se lee: overrides vs `.umg-faculty h1/h2/p`.
18. Si hay hueco bajo el header: revisar `umg-derecho-story.css` (`top: 0`) y `body.umg-faculty-page` padding 0.