# Derecho Page Overrides

> **PROJECT:** UMG Derecho  
> **Page:** Facultad de Ciencias Jurídicas y Sociales  
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
- Section padding: story full-bleed; post-story vía `umg-derecho-page.css` (banda 90/10 + FAQ viewport; sin scroll-snap)
- Rhythm: **story sticky stack (5 escenas)** → banda pensum 90% + stats 10% → FAQ → (global prefooter)
- Pensum: mock 5 ciclos × 2 semestres, abanico interactivo. Instructors conservados en disco, no en página.
- Story: sticky `top: 0` / `100dvh` (full-bleed bajo header). Foto | panel navy. Contraste con overrides `!important`.
- FAQ: acordeones numerados + imagen centrada verticalmente + CTA admisiones.

## Typography (page-scoped)

- Story titles: Merriweather, blanco `#FFFFFF`, `clamp(1.45rem, 2.4vw, 2.35rem)`
- Story eyebrow: Montserrat caps, oro claro `#E2C57A`
- Story body: Montserrat 500, `#EEF3F9`
- Story points: blanco + marcador oro
- Page H2/H3 below story: Merriweather + Montserrat as brand
- Body (rest of page): `clamp(1rem, 1.15vw, 1.125rem)` / 1.65

## Motion

- Story stack (desktop ≥992px): `position: sticky; top: 0; height: 100dvh` + GSAP ScrollTrigger `scrub: true` (full-bleed bajo header fijo)
- Cover entre escenas: **solo** velo en `[data-story-dim]` sobre la foto. Prohibido `scale`/`opacity`/`filter` en `.umg-derecho-story__card-inner`
- No scroll-snap de página (rompe scrub)
- Image parallax: scale suave en la foto, slight translateY
- Text: translateY suave, siempre `opacity: 1` (legible)
- Below story: `.umg-reveal` 500–700ms
- Buttons: translateY(-2px) 250ms
- Respect `prefers-reduced-motion` (no parallax/scale scrub; content fully visible)

## Avoid

- Card soup, purple gradients, emoji icons, GSAP for standalone fades
- Startup / gaming / neon looks; Soft UI / Satoshi from Master
- Replacing UMG fonts/colors with skill defaults
- Home scroll-snap on this page
