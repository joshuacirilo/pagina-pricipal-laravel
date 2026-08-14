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
- No commitear ni pushear salvo pedido explícito.
- Antes de explorar código: `graphify query "..."` (grafo en `graphify-out/`). Tras editar: `graphify update .`.

### Foco actual: Facultad de Derecho (scroll story)

La conversación activa está en **Derecho**, no en el home. Objetivo del usuario: **atrapar** e **informar** con storytelling por scroll (sticky stacked cards + GSAP scrub).

**Decisiones cerradas con el usuario**

1. El story **reemplaza hero + intro** (no solo el hero).
2. Features (“La carrera en síntesis”) y Topics (“Facultad… / Derecho con propósito”) se **eliminaron** de la página; su información se redistribuyó en las **5 slides** del story.
3. Exactamente **5 slides** (no 6). Fotos de referencia en `public/images/derecho/` (5 PNGs).
4. GSAP sí, vía scripts en `public/build` + vendor local (no entry Vite que vacíe `public/build`; no CDN).
5. Solo ruta `derecho` — no tocar otras facultades ni el home salvo pedido.
6. Tokens UMG ganan sobre el output del skill (evitar purple Soft UI / Satoshi del Master).
7. Referencia visual de panel: número en caja oro + panel navy + foto grande (mockup del usuario). Contraste legible es obligatorio.

**Orden de página actual (real)**

```
Story (5 escenas) → Banda Pensum 90% + Stats 10% → FAQ (1 pantalla) → (prefooter global)
```

Post-story: banda `umg-derecho-band` = pensum 90% + stats 10% en un viewport (como home 60/40). FAQ a pantalla completa. **Sin** `scroll-snap`. CSS: `public/build/css/umg-derecho-page.css`.

Archivo: `resources/views/grupo74/derecho.blade.php` — ya **no** incluye instructors, features ni topics. El componente `<x-umg-derecho-instructors />` y las rutas `detalles-instructor-derecho*` se **conservan** en disco para uso futuro.

**Escenas actuales** (`config/umg-derecho-story.php`)

| ID | Nº | Rol | Contenido |
|----|----|-----|-----------|
| `hook` | 01 | Atrapar | ¿Por qué estudiar Derecho? + points |
| `aprender` | 02 | Formación | ¿Qué aprenderás? + words COMPRENDER/ARGUMENTAR/DEFENDER + points |
| `ingreso` | 03 | Ingreso | Perfil de ingreso + points |
| `egreso` | 04 | Egreso | Perfil de egreso + points |
| `comienza` | 05 | CTA | Admisión; CTAs → `#umg-derecho-pensum` + admisiones UMG |

Fotos: `public/images/derecho/*.png` (paths en config como `images/derecho/...`).

**Pensum abanico (reemplaza cuerpo académico en página)**

- Componente: `resources/views/components/umg-derecho-pensum.blade.php`
- Datos mock: `config/umg-derecho-pensum.php` (5 ciclos)
- CSS/JS: `public/build/css/umg-derecho-pensum.css`, `public/build/js/umg-derecho-pensum.js`
- Desktop ≥992px: cartas en abanico (rotate); click/teclado activa ciclo y muestra cursos
- Móvil: lista vertical; `prefers-reduced-motion`: grid plano
- Instructors Blade + páginas detalle: **no borrados**, solo fuera de la página Derecho

**Look del panel (estado actual)**

- Desktop ≥992px: grid imagen (~55%) \| panel navy (~45%).
- Eyebrow oro claro; número en caja oro; título **blanco Merriweather**; body `#EEF3F9`; bullets blancos con marcador oro.
- Overrides fuertes contra `.umg-faculty h1/h2/p` (ese tema pinta navy/oscuro y rompe contraste).
- Fondos de card/card-inner en hex opaco `#0b2a52 !important` (sticky debe tapar la escena anterior).
- Cover entre escenas: **solo** `[data-story-dim]` sobre la foto. Prohibido `scale`/`opacity`/`filter` en `.umg-derecho-story__card-inner`.

**Bugs de esta sesión (ya resueltos — no reintroducir)**

1. Texto ilegible (navy sobre navy) → causa: `.umg-faculty h1/h2/p` ganaba por especificidad. Fix: selectores `.umg-faculty .umg-derecho-story h1...` + colores hex `!important`.
2. Texto de todas las slides **acumulado / apilado** sobre fondo blanco → causa: comentario CSS con `h*/p` cerraba el comentario antes de tiempo, invalidaba el bloque de variables `--story-*`, las cards sticky quedaban transparentes y el texto se veía uno encima de otro. Fix: comentario limpio + fondos opacos en hex.
3. Flash negro entre escenas (sesión previa) → no volver a animar el card-inner entero.

**Componentes Blade del story**

- Card acepta: `number`, `eyebrow`, `title`, `description`, `image`, `imagePosition`, `words`, `points`, `ctas` (ya no usa `paths` ni panel light).
- CTA slide 05 apunta a `#umg-derecho-pensum` (“Ver pensum”).

**Feedback del usuario en esta conversación**

- No le gustaba el look visual de las slides → rediseño + 5 fotos nuevas.
- Quería quitar “carrera en síntesis” y “facultad de ciencias jurídicas” y meter esa info en el hero.
- Información no se leía (contraste) → fix tipografía/colores.
- “Todo el texto se va acumulando” → fix del comentario CSS / sticky transparente.

**Pendiente / siguiente paso típico (confirmar con el usuario)**

- Verificar en desktop real (hard refresh) que: contraste OK, una sola escena visible a la vez, sin flash negro.
- Pulir copy por escena (más corto / más persuasivo) si lo pide.
- Afinar `object-position` de fotos.
- Afinar scrub / parallax **sin** reintroducir filter en el shell.
- Si pide el mismo patrón en otras facultades: necesita set de 5 fotos por carrera; hoy solo Derecho tiene story.
- Hero/intro Blade antiguos (`umg-derecho-hero`, `umg-derecho-intro`) y components features/topics **siguen en disco** pero **ya no se usan** en la página Derecho.

### Qué se hizo antes (home / admisión) — contexto, no reabrir sin pedir

1. Se quitaron del home bloques LMS: coordinador, egresados, eventos, frases, noticias, métricas rotas y el bloque `share-knowledge`.
2. Landing Astro emigrada a `<x-umg-sistemas-landing />` (copy universidad / admisión).
3. Scroll por pantalla (`html.umg-home-scroll` + snap); contacto 60dvh + footer 40dvh; pre-footer oculto solo en home.
4. Formulario `#contacto` frontend (toggle Correo|WhatsApp); backend `POST /contacto` existe.
5. Motion propio del home (`umg-home-motion.js`); **no** instalar `bertux77/laravel-inview-animations`.

### Preferencias de motion del usuario

- **Atrapar**: deliberado / cinematográfico, no micro-transiciones de 300 ms.
- Home: reveals al **llegar** a cada pantalla (scroll-snap).
- Derecho: scroll-driven con `scrub: true` (el usuario controla); sin flash negro; sin texto acumulado entre escenas.
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
- `design-system/umg-derecho/pages/derecho.md` (**pisa** el Master; ritmo = story 5 escenas → pensum abanico → stats → FAQ)
- `config/umg-faculties.php` (datos largos de carrera; features/topics ya no se renderizan en Derecho)
- `config/umg-derecho-story.php` (fuente de verdad de las 5 escenas del story)
- `config/umg-derecho-pensum.php` (mock de 5 ciclos del pensum abanico)

---

## Derecho — scroll story (detalle técnico)

Ruta: `/grupo74/derecho` · vista: `grupo74.derecho` · `body.umg-faculty-page`

### Arquitectura

| Pieza | Archivo |
|-------|---------|
| Página | `resources/views/grupo74/derecho.blade.php` |
| Wrapper | `resources/views/components/umg-derecho-story.blade.php` |
| Card | `resources/views/components/umg-derecho-story-card.blade.php` |
| Datos escenas | `config/umg-derecho-story.php` |
| CSS scoped | `public/build/css/umg-derecho-story.css` |
| JS runtime | `public/build/js/umg-derecho-story.js` |
| JS espejo | `resources/js/animations/umg-derecho-story.js` (mantener sync al editar) |
| Fotos | `public/images/derecho/` |
| GSAP vendor | `public/build/js/vendor/gsap.min.js` + `ScrollTrigger.min.js` |
| Reveals resto página | `public/build/js/umg-faculty-derecho.js` (`.umg-reveal` fuera del story) |
| CSS link | `mainlayout.blade.php` solo si `Route::is(['derecho'])` |
| Scripts | `footer-scripts.blade.php`: vendor GSAP → story JS → faculty-derecho JS |

### Layout visual por escena

- Desktop ≥992px: sticky stack; grid imagen \| panel navy.
- Móvil `<992px`: imagen arriba + panel abajo; sticky off; motion lite.
- Imagen: `object-fit: cover` + `object-position` por escena (`image_position` en config) + overrides `!important` contra `img { height: auto }` del tema.
- Scrim suave hacia el panel; no tapar la foto.
- Cover: `.umg-derecho-story__dim` solo sobre media.

### Trampas del story (no repetir)

1. **Flash negro al cambiar escena:** no aplicar `scale` + `opacity` + `filter` al `.umg-derecho-story__card-inner`. Usar solo dim en la foto.
2. **Texto invisible:** `.umg-faculty h1/h2/p` pinta navy/oscuro; override con mayor especificidad + hex `!important`.
3. **Texto acumulado (sticky transparente):** nunca poner `*/` dentro de un comentario CSS (ej. escribir `h*/p`). Rompe el parseo, invalida variables y las cards sticky quedan sin fondo. Fondos de card siempre en hex opaco (`#0b2a52 !important`).
4. **Imagen “rota” / no llena:** combatir `img { height: auto }` del tema con reglas scoped `!important` en `.umg-derecho-story__img`.
5. **`npm run build` / Vite:** no usarlo para este feature; vacía `public/build/`. Actualizar GSAP copiando desde `node_modules/gsap/dist/` a `public/build/js/vendor/`.
6. **Doble animación:** no poner `.umg-reveal` dentro del story; el faculty JS es para secciones de abajo.
7. **Hard refresh** tras tocar CSS/JS (`filemtime` en query string).
8. **No re-añadir** features/topics a la página salvo pedido explícito.

### Design system Derecho (motion)

Ver `design-system/umg-derecho/pages/derecho.md`: sticky stack + GSAP scrub permitido; GSAP no para fades sueltos; marca navy/oro/rojo/Merriweather+Montserrat; 5 escenas informativas.

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

Vistas en `resources/views/grupo73|74|75/*.blade.php`. Solo Derecho tiene story sticky + design system de página.

No reintroducir sin pedido: `umg-faculty-landing`, `umg-law-story` genéricos fallidos de agentes previos.

---

## Git

- Baseline bueno conocido: **`6566b04`**.
- `.gitignore` incluye `/graphify-out/` y `/.cursor/`.
- Antes de cambios grandes: `git status`. Si hay borrados masivos en `public/build/img` → **parar** y `git restore -- public/build/img`.
- Autoload: no añadir `app/helpers.php` sin versionar el archivo.
- Estado típico de esta rama de trabajo: cambios en story Derecho (config, Blade, CSS, design-system, README) + imágenes en `public/images/derecho/` (pueden estar untracked).

---

## Para el agente (siguiente sesión)

1. Leer este README completo; el **foco actual es Derecho story**, no reabrir home sin pedido.
2. `graphify query "..."` antes de explorar.
3. UI: skill UI UX Pro Max + `--stack laravel`; tokens UMG de `design-system/umg-derecho/pages/derecho.md`.
4. Editar runtime en `public/build/css|js/umg-derecho-story.*` y sincronizar el espejo JS en `resources/js/animations/`.
5. Copy/escenas: editar `config/umg-derecho-story.php` (luego `php artisan config:clear` si hace falta).
6. **No** reintroducir cover con `filter`/`opacity`/`scale` en el card-inner.
7. **No** comentarios CSS con `*/` embebido; **no** fondos transparentes en cards sticky.
8. **No** `npm run build` para este feature; **no** CDN GSAP.
9. **No** romper home scroll-snap / 60-40 / pre-footer.
10. **No** volver a montar features/topics en Derecho salvo pedido.
11. Tras editar: `graphify update .`
12. No commit/push salvo pedido.
13. Si Derecho “se pone negro” al scrollear: revisar cover del story y hard refresh.
14. Si el texto se acumula / fondo blanco: revisar parseo del CSS del story y fondos opacos de `.umg-derecho-story__card`.
15. Si el texto no se lee: revisar overrides vs `.umg-faculty h1/h2/p`.
