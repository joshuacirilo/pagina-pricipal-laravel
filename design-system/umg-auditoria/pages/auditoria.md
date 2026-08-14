# Auditoría Page Overrides

> **PROJECT:** UMG Auditoría  
> **Page:** Facultad de Auditoría / Licenciatura en Contaduría Pública y Auditoría  
> Overrides Master. Brand tokens always win over skill defaults.

---

## Brand (locked — do not replace)

- Navy: `#0B2A52` / `#1A3F73`
- CTA Red: `#AA1E23` / `#C62828`
- Gold: `#C6A256`
- Text: `#1A1D21` / `#2F343B`
- Fonts: Merriweather (display) + Montserrat (UI)
- Radius: `12px` (images/cards) — not exaggerated
- Shadow: `0 10px 40px rgba(11,42,82,.08)` max

## Layout

- Container: `width: min(90%, 1400px); margin-inline: auto`
- Section padding: story full-bleed; post-story vía `umg-auditoria-page.css` (banda 90/10 + FAQ viewport; sin scroll-snap)
- Rhythm: **story sticky stack (5 escenas)** → banda pensum 90% + stats 10% → FAQ → (global prefooter)
- Pensum: mock 5 ciclos × 2 semestres, abanico interactivo. Instructors conservados en disco/rutas, no en página.
- Story: sticky `top: 0` / `100dvh` (full-bleed bajo header). Foto | panel navy.
- FAQ: acordeones numerados + imagen centrada verticalmente + CTA admisiones.
- Fotos: `public/images/Auditoria/`

## Typography (page-scoped)

- Story titles: Merriweather, blanco `#FFFFFF`, `clamp(1.45rem, 2.4vw, 2.35rem)`
- Story eyebrow: Montserrat caps, oro claro `#E2C57A`
- Story body: Montserrat 500, `#EEF3F9`
- Story points: blanco + marcador oro

## Motion

- Story stack (desktop ≥992px): sticky + GSAP ScrollTrigger `scrub: true`
- Cover: **solo** `[data-story-dim]` sobre la foto. Prohibido `scale`/`opacity`/`filter` en `.umg-auditoria-story__card-inner`
- No scroll-snap de página
- Respect `prefers-reduced-motion`

## Avoid

- Card soup, purple gradients, emoji icons, Soft UI / Satoshi / fonts del skill
- Replacing UMG fonts/colors with skill defaults
- Home scroll-snap on this page
- Re-añadir instructors a la página salvo pedido
