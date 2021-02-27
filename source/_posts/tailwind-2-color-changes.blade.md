---
extends: _layouts.post
title: Tailwind 2.0 Color Changes
date: 2021-02-26
description: A quick comparison between the default colors in Tailwind v1 and v2
section: content
author: Jess Archer
---

Tailwind 2.0 has introduced a massive new color pallete! It's so big that not all of the colors made it in to the defaults.

Each color now has an extra shade called "50" which in some cases is closer to the old "100" value than it is to the new "100".

However, orange and teal are now no longer included in the defaults. Presumably because each color results in a massive number of extra utility class variations.

To make it easier to see what's changed, I have included the Tailwind 1.0 colors alongside the new colors.

@php
$colors = [
    'Gray' => [
        'description' => 'Tailwind 2.0 now has FOUR different gray palletes to choose from. The default gray being <code>coolGray</code>.',
        'collections' => [
            'Tailwind 1' => [
                50 => null,
                100 => '#f7fafc',
                200 => '#edf2f7',
                300 => '#e2e8f0',
                400 => '#cbd5e0',
                500 => '#a0aec0',
                600 => '#718096',
                700 => '#4a5568',
                800 => '#2d3748',
                900 => '#1a202c',
            ],
            '<code>coolGray</code><div class="text-sm">(default)</div>' => [
                50  => '#F9FAFB',
                100 => '#F3F4F6',
                200 => '#E5E7EB',
                300 => '#D1D5DB',
                400 => '#9CA3AF',
                500 => '#6B7280',
                600 => '#4B5563',
                700 => '#374151',
                800 => '#1F2937',
                900 => '#111827',
            ],
            '<code>blueGray</code>' => [
                50  => '#F8FAFC',
                100 => '#F1F5F9',
                200 => '#E2E8F0',
                300 => '#CBD5E1',
                400 => '#94A3B8',
                500 => '#64748B',
                600 => '#475569',
                700 => '#334155',
                800 => '#1E293B',
                900 => '#0F172A',
            ],
            '<code>gray</code>' => [
                50  => '#FAFAFA',
                100 => '#F4F4F5',
                200 => '#E4E4E7',
                300 => '#D4D4D8',
                400 => '#A1A1AA',
                500 => '#71717A',
                600 => '#52525B',
                700 => '#3F3F46',
                800 => '#27272A',
                900 => '#18181B',
            ],
            '<code>trueGray</code>' => [
                50  => '#FAFAFA',
                100 => '#F5F5F5',
                200 => '#E5E5E5',
                300 => '#D4D4D4',
                400 => '#A3A3A3',
                500 => '#737373',
                600 => '#525252',
                700 => '#404040',
                800 => '#262626',
                900 => '#171717',
            ],
            '<code>trueGray</code>' => [
                50  => '#FAFAF9',
                100 => '#F5F5F4',
                200 => '#E7E5E4',
                300 => '#D6D3D1',
                400 => '#A8A29E',
                500 => '#78716C',
                600 => '#57534E',
                700 => '#44403C',
                800 => '#292524',
                900 => '#1C1917',
            ],
        ]
    ],
    'Red' => [
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#fff5f5',
                200 => '#fed7d7',
                300 => '#feb2b2',
                400 => '#fc8181',
                500 => '#f56565',
                600 => '#e53e3e',
                700 => '#c53030',
                800 => '#9b2c2c',
                900 => '#742a2a',
            ],
            '<code>red</code><div class="text-sm">(default)</div>' => [
                50  => '#FEF2F2',
                100 => '#FEE2E2',
                200 => '#FECACA',
                300 => '#FCA5A5',
                400 => '#F87171',
                500 => '#EF4444',
                600 => '#DC2626',
                700 => '#B91C1C',
                800 => '#991B1B',
                900 => '#7F1D1D',
            ],
        ],
    ],
    'Orange' => [
        'description' => 'Tailwind 2.0 no longer includes orange in the default pallete, but there is still a refreshed orange pallete that you can pull in to your config.',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#fffaf0',
                200 => '#feebc8',
                300 => '#fbd38d',
                400 => '#f6ad55',
                500 => '#ed8936',
                600 => '#dd6b20',
                700 => '#c05621',
                800 => '#9c4221',
                900 => '#7b341e',
            ],
            '<code>orange</code>' => [
                50  => '#FFF7ED',
                100 => '#FFEDD5',
                200 => '#FED7AA',
                300 => '#FDBA74',
                400 => '#FB923C',
                500 => '#F97316',
                600 => '#EA580C',
                700 => '#C2410C',
                800 => '#9A3412',
                900 => '#7C2D12',
            ],
        ],
    ],
    'Yellow' => [
        'description' => 'In addition to refreshing the default yellow pallete, Tailwind 2.0 has added an amber pallete as well, which they like so much that they\'ve mapped it as the default yellow',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#fffff0',
                200 => '#fefcbf',
                300 => '#faf089',
                400 => '#f6e05e',
                500 => '#ecc94b',
                600 => '#d69e2e',
                700 => '#b7791f',
                800 => '#975a16',
                900 => '#744210',
            ],
            '<code>amber</code><div class="text-sm">(default)</div>' => [
                50  => '#FFFBEB',
                100 => '#FEF3C7',
                200 => '#FDE68A',
                300 => '#FCD34D',
                400 => '#FBBF24',
                500 => '#F59E0B',
                600 => '#D97706',
                700 => '#B45309',
                800 => '#92400E',
                900 => '#78350F',
            ],
            '<code>yellow</code>' => [
                50  => '#FEFCE8',
                100 => '#FEF9C3',
                200 => '#FEF08A',
                300 => '#FDE047',
                400 => '#FACC15',
                500 => '#EAB308',
                600 => '#CA8A04',
                700 => '#A16207',
                800 => '#854D0E',
                900 => '#713F12',
            ],
        ],
    ],
    'Green' => [
        'description' => 'So many greens! The default green actually maps to <code>emerald</code>, rather than <code>green</code>, but you can change this in your config.',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#f0fff4',
                200 => '#c6f6d5',
                300 => '#9ae6b4',
                400 => '#68d391',
                500 => '#48bb78',
                600 => '#38a169',
                700 => '#2f855a',
                800 => '#276749',
                900 => '#22543d',
            ],
            '<code>emerald</code><div class="text-sm">(default)</div>' => [
                50  => '#ECFDF5',
                100 => '#D1FAE5',
                200 => '#A7F3D0',
                300 => '#6EE7B7',
                400 => '#34D399',
                500 => '#10B981',
                600 => '#059669',
                700 => '#047857',
                800 => '#065F46',
                900 => '#064E3B',
            ],
            '<code>lime</code>' => [
                50  => '#F7FEE7',
                100 => '#ECFCCB',
                200 => '#D9F99D',
                300 => '#BEF264',
                400 => '#A3E635',
                500 => '#84CC16',
                600 => '#65A30D',
                700 => '#4D7C0F',
                800 => '#3F6212',
                900 => '#365314',
            ],
            '<code>green</code>' => [
                50  => '#F0FDF4',
                100 => '#DCFCE7',
                200 => '#BBF7D0',
                300 => '#86EFAC',
                400 => '#4ADE80',
                500 => '#22C55E',
                600 => '#16A34A',
                700 => '#15803D',
                800 => '#166534',
                900 => '#14532D',
            ],
        ],
    ],
    'Teal' => [
        'description' => 'Tailwind 2.0 no longer includes teal in the default pallete, but there is still a refreshed teal pallete that you can pull in to your config.',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#e6fffa',
                200 => '#b2f5ea',
                300 => '#81e6d9',
                400 => '#4fd1c5',
                500 => '#38b2ac',
                600 => '#319795',
                700 => '#2c7a7b',
                800 => '#285e61',
                900 => '#234e52',
            ],
            '<code>teal</code>' => [
                50  => '#F0FDFA',
                100 => '#CCFBF1',
                200 => '#99F6E4',
                300 => '#5EEAD4',
                400 => '#2DD4BF',
                500 => '#14B8A6',
                600 => '#0D9488',
                700 => '#0F766E',
                800 => '#115E59',
                900 => '#134E4A',
            ],
        ],
    ],
    'Blue' => [
        'description' => 'The blue pallete has also exploded! While the default blue maps to <code>blue</code>, I think the new <code>lightBlue</code> looks a lot closer to the Tailwind 1.0 blues, if you happened to prefer that.',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#ebf8ff',
                200 => '#bee3f8',
                300 => '#90cdf4',
                400 => '#63b3ed',
                500 => '#4299e1',
                600 => '#3182ce',
                700 => '#2b6cb0',
                800 => '#2c5282',
                900 => '#2a4365',
            ],
            '<code>blue</code><div class="text-sm">(default)</div>' => [
                50  => '#EFF6FF',
                100 => '#DBEAFE',
                200 => '#BFDBFE',
                300 => '#93C5FD',
                400 => '#60A5FA',
                500 => '#3B82F6',
                600 => '#2563EB',
                700 => '#1D4ED8',
                800 => '#1E40AF',
                900 => '#1E3A8A',
            ],
            '<code>lightBlue</code>' => [
                50  => '#F0F9FF',
                100 => '#E0F2FE',
                200 => '#BAE6FD',
                300 => '#7DD3FC',
                400 => '#38BDF8',
                500 => '#0EA5E9',
                600 => '#0284C7',
                700 => '#0369A1',
                800 => '#075985',
                900 => '#0C4A6E',
            ],
            '<code>cyan</code>' => [
                50  => '#ECFEFF',
                100 => '#CFFAFE',
                200 => '#A5F3FC',
                300 => '#67E8F9',
                400 => '#22D3EE',
                500 => '#06B6D4',
                600 => '#0891B2',
                700 => '#0E7490',
                800 => '#155E75',
                900 => '#164E63',
            ],
        ],
    ],
    'Indigo' => [
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#ebf4ff',
                200 => '#c3dafe',
                300 => '#a3bffa',
                400 => '#7f9cf5',
                500 => '#667eea',
                600 => '#5a67d8',
                700 => '#4c51bf',
                800 => '#434190',
                900 => '#3c366b',
            ],
            '<code>indigo</code><div class="text-sm">(default)</div>' => [
                50  => '#EEF2FF',
                100 => '#E0E7FF',
                200 => '#C7D2FE',
                300 => '#A5B4FC',
                400 => '#818CF8',
                500 => '#6366F1',
                600 => '#4F46E5',
                700 => '#4338CA',
                800 => '#3730A3',
                900 => '#312E81',
            ],
        ],
    ],
    'Purple' => [
        'description' => 'Steve and Adam love their purples! And as with the green pallete, the default purple does map to <code>purple</code>, but instead to <code>violet</code>.',
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#faf5ff',
                200 => '#e9d8fd',
                300 => '#d6bcfa',
                400 => '#b794f4',
                500 => '#9f7aea',
                600 => '#805ad5',
                700 => '#6b46c1',
                800 => '#553c9a',
                900 => '#44337a',
            ],
            '<code>violet</code><div class="text-sm">(default)</div>' => [
                50  => '#F5F3FF',
                100 => '#EDE9FE',
                200 => '#DDD6FE',
                300 => '#C4B5FD',
                400 => '#A78BFA',
                500 => '#8B5CF6',
                600 => '#7C3AED',
                700 => '#6D28D9',
                800 => '#5B21B6',
                900 => '#4C1D95',
            ],
            '<code>purple</code>' => [
                50  => '#FAF5FF',
                100 => '#F3E8FF',
                200 => '#E9D5FF',
                300 => '#D8B4FE',
                400 => '#C084FC',
                500 => '#A855F7',
                600 => '#9333EA',
                700 => '#7E22CE',
                800 => '#6B21A8',
                900 => '#581C87',
            ],
            '<code>fuchsia</code>' => [
                50  => '#FDF4FF',
                100 => '#FAE8FF',
                200 => '#F5D0FE',
                300 => '#F0ABFC',
                400 => '#E879F9',
                500 => '#D946EF',
                600 => '#C026D3',
                700 => '#A21CAF',
                800 => '#86198F',
                900 => '#701A75',
            ],
        ],
    ],
    'Pink' => [
        'collections' => [
            'Tailwind 1' => [
                50  => null,
                100 => '#fff5f7',
                200 => '#fed7e2',
                300 => '#fbb6ce',
                400 => '#f687b3',
                500 => '#ed64a6',
                600 => '#d53f8c',
                700 => '#b83280',
                800 => '#97266d',
                900 => '#702459',
            ],
            '<code>pink</code><div class="text-sm">(default)</div>' => [
                50  => '#FDF2F8',
                100 => '#FCE7F3',
                200 => '#FBCFE8',
                300 => '#F9A8D4',
                400 => '#F472B6',
                500 => '#EC4899',
                600 => '#DB2777',
                700 => '#BE185D',
                800 => '#9D174D',
                900 => '#831843',
            ],
            '<code>rose</code>' => [
                50  => '#FFF1F2',
                100 => '#FFE4E6',
                200 => '#FECDD3',
                300 => '#FDA4AF',
                400 => '#FB7185',
                500 => '#F43F5E',
                600 => '#E11D48',
                700 => '#BE123C',
                800 => '#9F1239',
                900 => '#881337',
            ],
        ],
    ],
];
@endphp

<div class="p-6 grid gap-6 bg-white border">
    @foreach ($colors as $colorName => $color)
        <div class="grid gap-2">
            <div class="font-bold text-gray-800">{{ $colorName }}</div>
            @if ($color['description'])
                <p class="mb-4 text-gray-600">{!! $color['description'] !!}</p>
            @endif
            <div class="grid gap-2">
                @foreach ($color['collections'] as $collectionName => $collection)
                    <div class="sm:flex">
                        <div class="w-32 flex items-center"><div>{!! $collectionName !!}</div></div>
                        <div class="flex-1 grid grid-cols-5 md:grid-cols-10 gap-2">
                            @foreach ($collection as $color)
                                @if ($color)
                                    <div class="h-16 rounded" style="background: {{ $color }}"></div>
                                @else
                                    <div class="h-16 rounded relative border">
                                        <svg class="w-full h-full absolute" viewBox="0 0 188 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line y1="-0.5" x2="265.872" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 188 0)" stroke="black" stroke-opacity="0.5"/>
                                            <line x1="0.353553" y1="-0.353553" x2="188.354" y2="187.646" stroke="black" stroke-opacity="0.5"/>
                                        </svg>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="hidden md:flex">
                <div class="w-32"></div>
                <div class="flex-1 grid grid-cols-10 gap-2 text-sm font-semibold">
                    <div>50</div>
                    <div>100</div>
                    <div>200</div>
                    <div>300</div>
                    <div>400</div>
                    <div>500</div>
                    <div>600</div>
                    <div>700</div>
                    <div>800</div>
                    <div>900</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

For more information on the colors, check out the [Tailwind 2.0 docs](https://tailwindcss.com/docs/customizing-colors) and be sure to check out the full [color reference](https://tailwindcss.com/docs/customizing-colors#color-palette-reference) at the bottom of the page.
