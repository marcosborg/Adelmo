@props([
    'name' => 'plus',
    'class' => '',
])

@switch($name)
    @case('check')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="m5 13.5 4.5 4.5L19 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('chart-bar')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M4 19h16M7 16V8m5 8V5m5 11v-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('bars')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        @break
    @case('arrow-shrink')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M19 5 5 19M9 5H5v4m14 6v4h-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('clipboard')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M5 4h14v16H5z" stroke="currentColor" stroke-width="2"/>
            <path d="M9 9h6M9 13h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        @break
    @case('arrow-right')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('user')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm-7 8a7 7 0 1 1 14 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        @break
    @case('calendar')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M4 7h16M7 4v6m10-6v6M5 10h14v10H5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('trending-up')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M5 16 10 11l3 3 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('chart-up')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M4 19h16M6 15l4-4 3 3 5-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('search')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2"/>
            <path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        @break
    @case('clock')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
        </svg>
        @break
    @case('mail')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M4 7h16v10H4z" stroke="currentColor" stroke-width="2"/>
            <path d="m4 8 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
        </svg>
        @break
    @case('phone')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M7 4h3l2 5-2 2a14 14 0 0 0 3 3l2-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 5 6a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break
    @case('map-pin')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" stroke="currentColor" stroke-width="2"/>
            <circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="2"/>
        </svg>
        @break
    @case('squares')
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M7 7h10v10H7z" stroke="currentColor" stroke-width="2"/>
            <path d="M4 4h16v16H4z" stroke="currentColor" stroke-width="2" opacity=".4"/>
        </svg>
        @break
    @case('plus')
    @default
        <svg {{ $attributes->merge(['class' => $class, 'width' => '22', 'height' => '22', 'viewBox' => '0 0 24 24', 'fill' => 'none', 'aria-hidden' => 'true']) }}>
            <path d="M12 3v18M3 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
@endswitch
