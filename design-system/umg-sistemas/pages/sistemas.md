# Sistemas Page Overrides

> **PROJECT:** UMG Sistemas  
> **Page:** Ingeniería en Sistemas de Información y Ciencias de la Computación  
> Overrides Master. Brand tokens always win over skill defaults.

---

## Brand (locked — do not replace)

- Navy: `#0B2A52` / `#1A3F73`
- CTA Red: `#AA1E23` / `#C62828`
- Gold: `#C6A256`
- Text: `#1A1D21` / `#2F343B`
- Fonts: Merriweather (display) + Montserrat (UI)
- Radius: `12px`
- Shadow: `0 10px 40px rgba(11,42,82,.08)` max

## Layout

- Rhythm: **story sticky stack (5 escenas)** → banda pensum 90% + stats 10% → FAQ → (global prefooter)
- Pensum: mock 5 ciclos × 2 semestres, abanico interactivo. Instructors en disco/rutas, no en página.
- Story: sticky `top: 0` / `100dvh`. Foto | panel navy.
- Fotos: `public/images/sistemas/` (4 assets; escena 05 reutiliza foto de formación)
- **No tocar** `<x-umg-sistemas-landing />` del home.

## Motion

- GSAP ScrollTrigger `scrub: true`
- Cover: solo `[data-story-dim]`. Prohibido `scale`/`opacity`/`filter` en `.umg-sistemas-story__card-inner`
- No scroll-snap de página
- Respect `prefers-reduced-motion`

## Avoid

- Purple gradients, emoji icons, Soft UI / Exo / fonts del skill
- Replacing UMG tokens
- Romper home scroll-snap / landing de admisión
- Re-añadir instructors salvo pedido
