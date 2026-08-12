@php
    $size = ($variant ?? 'fab') === 'panel' ? 88 : 56;
@endphp
<svg
    class="umg-assistant__robot"
    width="{{ $size }}"
    height="{{ $size }}"
    viewBox="0 0 64 64"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    aria-hidden="true"
    focusable="false"
>
    <ellipse cx="32" cy="58" rx="14" ry="3" fill="rgba(11,42,82,0.12)"/>
    <path d="M20 18c0-8 5.4-14 12-14s12 6 12 14v20c0 8-5.4 14-12 14s-12-6-12-14V18z" fill="#F7FBFF"/>
    <path d="M20 18c0-8 5.4-14 12-14s12 6 12 14v20c0 8-5.4 14-12 14s-12-6-12-14V18z" stroke="#D7E4F2" stroke-width="1.5"/>
    <path d="M18 28c-3 1-5 3.5-5 6.5S15 41 18 42" stroke="#E8EFF7" stroke-width="5" stroke-linecap="round"/>
    <path d="M46 28c3 1 5 3.5 5 6.5S49 41 46 42" stroke="#E8EFF7" stroke-width="5" stroke-linecap="round"/>
    <rect x="22" y="22" width="20" height="14" rx="7" fill="#0B1B2E"/>
    <circle cx="27.5" cy="28.5" r="2.2" fill="#22D3EE"/>
    <circle cx="36.5" cy="28.5" r="2.2" fill="#22D3EE"/>
    <path d="M28 33.2c1.4 1.4 6.6 1.4 8 0" stroke="#22D3EE" stroke-width="1.6" stroke-linecap="round"/>
    <path d="M32 4v5" stroke="#94A3B8" stroke-width="1.6" stroke-linecap="round"/>
    <circle cx="32" cy="3" r="2.2" fill="#22D3EE"/>
    <circle cx="32" cy="3" r="3.6" fill="rgba(34,211,238,0.25)"/>
</svg>
