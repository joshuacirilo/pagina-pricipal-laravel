# Trabajo Social Page Overrides

> **PROJECT:** UMG Trabajo Social  
> **Page:** Licenciatura en Trabajo Social  
> Overrides Master. Brand tokens always win over skill defaults.

---

## Brand (locked — do not replace)

- Navy: `#0B2A52` / `#1A3F73`
- CTA Red: `#AA1E23` / `#C62828`
- Gold: `#C6A256`
- Text: `#1A1D21` / `#2F343B`
- Fonts: Merriweather (display) + Montserrat (UI)

## Layout

- Rhythm: **story sticky stack (5 escenas)** → banda pensum 90% + stats 10% → FAQ
- Fotos: `public/images/trabajo-social/` (renombrada desde `trabajo social`; 4 assets; escena 05 reutiliza hook)
- Instructors en disco/rutas, no en página

## Motion

- GSAP ScrollTrigger `scrub: true`
- Cover: solo `[data-story-dim]`
- No scroll-snap de página
- Respect `prefers-reduced-motion`

## Avoid

- Purple gradients, emoji icons, Soft UI / fonts del skill
- Replacing UMG tokens
