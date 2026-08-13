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
- Section padding: `padding-block: clamp(80px, 10vw, 150px)`
- Rhythm: **story sticky stack (6 escenas)** → features cortos → topics cortos → instructors → stats navy → FAQ → (global prefooter)

## Typography (page-scoped)

- H1: `clamp(2.75rem, 5.5vw, 4.75rem)` / line-height ~0.98
- H2: `clamp(2rem, 3.5vw, 3.25rem)` / line-height ~1.05
- H3: `clamp(1.25rem, 2vw, 1.75rem)`
- Body: `clamp(1rem, 1.15vw, 1.125rem)` / 1.65
- Story titles: Merriweather, large clamp, title-mask reveal

## Motion

- Story stack (desktop ≥992px): `position: sticky` + GSAP ScrollTrigger `scrub: true`
- Covered card: scale 1→0.94, opacity 1→0.65, brightness 1→0.75
- Image parallax: scale 1.12→1, slight translateY
- Text: translateY(40px)→0 + opacity (title-mask), not fade-only
- Below story: `.umg-reveal` 500–700ms
- Buttons: translateY(-2px) 250ms
- Respect `prefers-reduced-motion` (no parallax/scale scrub; content fully visible)

## Avoid

- Card soup, purple gradients, emoji icons, GSAP for standalone fades
- Startup / gaming / neon looks; Soft UI / Satoshi from Master
- Replacing UMG fonts/colors with skill defaults
- Home scroll-snap on this page
