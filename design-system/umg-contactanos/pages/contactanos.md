# Contáctanos Page Overrides

> **PROJECT:** UMG Contáctanos  
> **Page:** `/contactanos` (route `contactanos`) — NOT `/prox/conts`  
> Overrides Master. Brand tokens always win over skill defaults.

---

## Brand (locked — do not replace)

- Navy: `#0B2A52` / `#1A3F73`
- CTA Red: `#AA1E23` / `#C62828`
- Gold: `#C6A256`
- Fonts: Merriweather + Montserrat

## Layout (hot window)

- Single viewport under fixed site header: content `100dvh` with `padding-top: var(--header-h)`
- Site header **on**; footer, prefooter, floating assistant **off**
- Split: pitch (photo + brand) | form panel — both columns vertically + horizontally centered
- Pitch keeps “Volver al inicio” as secondary brand chrome
- `/prox/conts` stays construction stub for other vinculos

## Typography

- Body/inputs ≥ 16px (`1.05rem`); labels ~`0.8rem`; channel pills ~`0.78rem`
- Display: Merriweather (brand + H1/H2); UI: Montserrat
- Prefer readable type over cramming — hide message/lead on short viewports

## Form

- Web3Forms via `api_key_form`
- Channels: Correo | WhatsApp | Celular

## Avoid

- Page scroll, map section, footer, multi-section landing
- Tiny labels (<12px) or missing header
