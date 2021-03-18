---
title: CV
---

@extends('_layouts.master')

@push('meta')
    <meta name="robots" content="noindex">
@endpush

@section('body')

    <div class="max-w-4xl mx-auto p-6 print:p-0 print:max-w-none">
        <header role="banner">
            <img src="/assets/images/jess-archer.jpg"
                alt="Photo of Jess Archer"
                class="sm:hidden h-20 w-20 rounded-full bg-contain"
            >

            <div class="mt-4 sm:mt-0 flex justify-between">
                <div>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-8 fill-current text-gray-600" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.917 35.08"><path d="M20.417 0l18.36 32.365c1.18 1.425 3.34 2.715 4.937 2.715h9.203L35.146 3.515l-.11-.005C34.124 1.811 31.445 0 29.552 0zM6.32 35.08h4.501c9.096 0 16.6-6.98 17.683-15.99L17.675 0v16.839c0 3.874-3.07 7.015-6.854 7.015H0z" /></svg>

                        <h1 class="ml-3 text-gray-800 text-2xl font-bold uppercase whitespace-nowrap">
                            Jessica Archer
                        </h1>
                    </div>

                    <p class="mt-2 text-lg font-semibold text-purple-800">
                        Senior Web Application Developer
                    </p>

                    <p class="mt-4">
                        A proficient and passionate front-end and back-end developer, user interface designer, open-source contributor, troubleshooter, podcast co-host, conference speaker, and co-founder &ndash; with over 15 years professional experience.
                        Currently specialising in Laravel, Vue.js, and Tailwind CSS.
                    </p>
                </div>

                <img src="/assets/images/jess-archer.jpg"
                    alt="Photo of Jess Archer"
                    class="hidden sm:block ml-4 flex-shrink-0 h-24 w-24 rounded-full bg-contain"
                >
            </div>
        </header>

        <hr class="mt-6 border-gray-200" />

        <div class="mt-6">
            <ul class="-my-1 sm:flex sm:flex-wrap">
                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <p class="inline-flex items-center">
                        <svg class="h-5 fill-current text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M24 0C15.168.01 8.01 7.168 8 16c0 7.02 10 24.05 14.296 31.048A2 2 0 0024 48a1.98 1.98 0 001.704-.954C30 40.052 40 23.028 40 16 39.99 7.168 32.832.01 24 0zm0 23a7 7 0 110-14 7 7 0 010 14z"/></svg>
                        <span class="ml-2 font-semibold">Brisbane, Australia <small class="font-normal print:hidden">(GMT +10)</small></span>
                    </p>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://jessarcher.com/" target="_blank">
                        <svg class="h-5 fill-current text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M38 47.5a2 2 0 000-4H25.5a.5.5 0 01-.5-.5v-3a.5.5 0 01.5-.5H42a6 6 0 006-6V5.678A5.094 5.094 0 0043 .5H5a5.094 5.094 0 00-5 5.178V33.5a6 6 0 006 6h14.5a.5.5 0 01.5.5v3a.5.5 0 01-.5.5H10a2 2 0 000 4h28zM4 5.678A1.102 1.102 0 015 4.5h38a1.102 1.102 0 011 1.178V29.5a1 1 0 01-1 1H5a1 1 0 01-1-1V5.678zM16 12a1.5 1.5 0 00-1.5 1.5v2.7c.002.496-.032.99-.1 1.48a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.5-.032c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c0 1.712.328 3.41.964 5L8.6 24.056c.228.604.824.986 1.468.942a1.498 1.498 0 001.366-1.086l.326-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H14a1.496 1.496 0 001.4-.944l1.136-2.854c.636-1.59.964-3.288.964-5v-2.7A1.5 1.5 0 0016 12zm12 0a1.5 1.5 0 00-1.5 1.5v2.7c0 .498-.036.996-.106 1.49a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.494-.042c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c0 1.712.328 3.41.964 5l1.144 2.852c.226.604.824.988 1.468.942a1.498 1.498 0 001.366-1.086l.318-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H26a1.496 1.496 0 001.4-.944l1.144-2.852A13.45 13.45 0 0029.5 16.2v-2.7A1.5 1.5 0 0028 12zm12 0a1.5 1.5 0 00-1.5 1.5v2.7c0 .498-.036.996-.106 1.49a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.494-.042c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c-.002 1.718.326 3.42.964 5.014l1.144 2.852c.226.604.824.988 1.468.942a1.498 1.498 0 001.366-1.086l.318-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H38a1.496 1.496 0 001.4-.944l1.144-2.852c.636-1.594.96-3.296.956-5.012v-2.7A1.5 1.5 0 0040 12z"/></svg>
                        <span class="ml-2 border-b border-dotted border-transparent group-hover:border-purple-500 font-semibold">jessarcher.com</span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://github.com/jessarcher" target="_blank">
                        <svg class="h-5 fill-current text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M24 .56C10.746.556-.004 11.298-.008 24.552A24 24 0 0016.56 47.38h.58a2 2 0 002.12-2.12v-.42-2.18a1.005 1.005 0 00-.4-.66 1.001 1.001 0 00-.84-.2c-5.36 1.16-6.5-2.2-6.58-2.42A9.287 9.287 0 008 35a2.31 2.31 0 00-.3-.22c.232-.126.498-.174.76-.14a2.94 2.94 0 012.3 1.76 6 6 0 008 2.32c.3-.13.516-.4.58-.72a3.994 3.994 0 011.12-2.46 1.002 1.002 0 00-.54-1.74c-4.74-.54-9.58-2.2-9.58-10.38a7.999 7.999 0 012.1-5.56.996.996 0 00.18-1.06 7.044 7.044 0 01.02-4.8 11.073 11.073 0 015.04 2.3.98.98 0 00.84.14A21.214 21.214 0 0124 13.7a20.94 20.94 0 015.5.74c.28.078.582.026.82-.14a11.176 11.176 0 015.04-2.3 7.146 7.146 0 010 4.76.996.996 0 00.18 1.06 8 8 0 012.1 5.5c0 8.18-4.86 9.82-9.62 10.36a1.001 1.001 0 00-.54 1.76 4.405 4.405 0 011.22 3.48v6.36c-.02.634.244 1.242.72 1.66a2.398 2.398 0 002.12.38c12.57-4.206 19.352-17.804 15.146-30.374A24 24 0 0024 .56z"/></svg>
                        <span class="ml-2 border-b border-dotted border-transparent group-hover:border-purple-500 font-semibold">github.com/jessarcher</span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://twitter.com/jessarchercodes" target="_blank">
                        <svg class="h-5 fill-current text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M46.64 12.88a1.001 1.001 0 00-.4-1.74l-1.58-.4a1 1 0 01-.66-1.4l.88-1.78c.24-.498.03-1.096-.466-1.336a1.002 1.002 0 00-.694-.064l-4 1.12a1.003 1.003 0 01-.88-.16 9.999 9.999 0 00-6-2c-5.522 0-10 4.478-10 10v.72a.5.5 0 01-.44.5c-5.62.66-11-2.2-16.8-8.88-.256-.284-.65-.4-1.02-.3A1 1 0 004 8a15.15 15.15 0 00.92 9.84.5.5 0 01-.52.72l-2.24-.44a1 1 0 00-1.14 1.18 10.3 10.3 0 004.74 7.56.5.5 0 010 .9l-1.06.42a1 1 0 00-.52 1.38 8.718 8.718 0 006.4 4.96.5.5 0 010 .94A21.883 21.883 0 012 37.12a1.02 1.02 0 00-.4 2 40.126 40.126 0 0016.28 3.86 25.158 25.158 0 0014-4A25 25 0 0043 18.12v-1.74a.998.998 0 01.36-.76l3.28-2.74z"/></svg>
                        <span class="ml-2 border-b border-dotted border-transparent group-hover:border-purple-500 font-semibold">@jessarchercodes</span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://linkedin.com/in/jessarcher" target="_blank">
                        <svg class="h-5 fill-current text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M5 17h8a1 1 0 011 1v26a1 1 0 01-1 1H5a1 1 0 01-1-1V18a1 1 0 011-1zM8.96 3c2.74 0 4.96 2.238 4.96 5s-2.22 5-4.96 5S4 10.762 4 8s2.22-5 4.96-5zM37 45h6a1 1 0 001-1V27.2C44 19.66 39.74 16 33.78 16a8.424 8.424 0 00-6.34 2.54A.82.82 0 0126 18a1 1 0 00-1-1h-6a1 1 0 00-1 1v26a1 1 0 001 1h6a1 1 0 001-1V29c0-2.762 2.238-5 5-5s5 2.238 5 5v15a1 1 0 001 1z"/></svg>
                        <span class="ml-2 border-b border-dotted border-transparent group-hover:border-purple-500 font-semibold">linkedin.com/in/jessarcher</span>
                    </a>
                </li>
            </ul>
        </div>

        <hr class="mt-6 border-gray-200" />

        <h2 class="mt-6 font-semibold text-xl uppercase tracking-wide">Expertise</h2>

        <div class="mt-6">
            <ul class="-m-1 flex flex-wrap font-semibold text-sm sm:text-base">
                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504.4 115.83a5.72 5.72 0 00-.28-.68 8.52 8.52 0 00-.53-1.25 6 6 0 00-.54-.71 9.36 9.36 0 00-.72-.94c-.23-.22-.52-.4-.77-.6a8.84 8.84 0 00-.9-.68L404.4 55.55a8 8 0 00-8 0L300.12 111a8.07 8.07 0 00-.88.69 7.68 7.68 0 00-.78.6 8.23 8.23 0 00-.72.93c-.17.24-.39.45-.54.71a9.7 9.7 0 00-.52 1.25c-.08.23-.21.44-.28.68a8.08 8.08 0 00-.28 2.08v105.24l-80.22 46.19V63.44a7.8 7.8 0 00-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35 8.35 0 00-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36 9.36 0 00-.72-.94 9.46 9.46 0 00-.78-.6 9.8 9.8 0 00-.88-.68L115.61 1.07a8 8 0 00-8 0L11.34 56.49a6.52 6.52 0 00-.88.69 7.81 7.81 0 00-.79.6 8.15 8.15 0 00-.71.93c-.18.25-.4.46-.55.72a7.88 7.88 0 00-.51 1.24 6.46 6.46 0 00-.29.67 8.18 8.18 0 00-.28 2.1v329.7a8 8 0 004 6.95l192.5 110.84a8.83 8.83 0 001.33.54c.21.08.41.2.63.26a7.92 7.92 0 004.1 0c.2-.05.37-.16.55-.22a8.6 8.6 0 001.4-.58L404.4 400.09a8 8 0 004-6.95V287.88l92.24-53.11a8 8 0 004-7V117.92a8.63 8.63 0 00-.24-2.09zM111.6 17.28l80.19 46.15-80.2 46.18-80.18-46.17zm88.25 60V278.6l-46.53 26.79-33.69 19.4V123.5l46.53-26.79zm0 412.78L23.37 388.5V77.32L57.06 96.7l46.52 26.8v215.18a6.94 6.94 0 00.12.9 8 8 0 00.16 1.18 5.92 5.92 0 00.38.9 6.38 6.38 0 00.42 1 8.54 8.54 0 00.6.78 7.62 7.62 0 00.66.84c.23.22.52.38.77.58a8.93 8.93 0 00.86.66l92.19 52.18zm8-106.17l-80.06-45.32 84.09-48.41 92.26-53.11 80.13 46.13-58.8 33.56zm184.52 4.57L215.88 490.11V397.8l130.72-74.6 45.77-26.15zm0-119.13L358.68 250l-46.53-26.79v-91.42l33.69 19.4L392.37 178zm8-105.28l-80.2-46.17 80.2-46.16 80.18 46.15zm8 105.28V178L455 151.19l33.68-19.4v91.39z"/></svg>
                    <span class="ml-1">Laravel</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z"/></svg>
                    <span class="ml-1">Vue.js</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg class="inline w-4 h-4 fill-current" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 11.1C15.3 3.9 19.8.3 27 .3c10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 27.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" transform="translate(5 16)" fill-rule="evenodd"></path></svg>
                    <span class="ml-1">Tailwind CSS</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"/></svg>
                    <span class="ml-1">PHP 7</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
                    <span class="ml-1">JavaScript & ES9/2018+</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M480 32l-64 368-223.3 80L0 400l19.6-94.8h82l-8 40.6L210 390.2l134.1-44.4 18.8-97.1H29.5l16-82h333.7l10.5-52.7H56.3l16.3-82H480z"/></svg>
                    <span class="ml-1">CSS 3</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" data-icon="html5" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                    <span class="ml-1">HTML 5</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z"/></svg>
                    <span class="ml-1">MySQL &amp; MariaDB</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z"/></svg>
                    <span class="ml-1">PostgreSQL</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Vim</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Automated Testing</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">TDD</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M439.55 236.05L244 40.45a28.87 28.87 0 00-40.81 0l-40.66 40.63 51.52 51.52c27.06-9.14 52.68 16.77 43.39 43.68l49.66 49.66c34.23-11.8 61.18 31 35.47 56.69-26.49 26.49-70.21-2.87-56-37.34L240.22 199v121.85c25.3 12.54 22.26 41.85 9.08 55a34.34 34.34 0 01-48.55 0c-17.57-17.6-11.07-46.91 11.25-56v-123c-20.8-8.51-24.6-30.74-18.64-45L142.57 101 8.45 235.14a28.86 28.86 0 000 40.81l195.61 195.6a28.86 28.86 0 0040.8 0l194.69-194.69a28.86 28.86 0 000-40.81z"/></svg>
                    <span class="ml-1">Git</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">DevOps</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">APIs</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Open-source</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Privacy</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Security</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M220.8 123.3c1 .5 1.8 1.7 3 1.7 1.1 0 2.8-.4 2.9-1.5.2-1.4-1.9-2.3-3.2-2.9-1.7-.7-3.9-1-5.5-.1-.4.2-.8.7-.6 1.1.3 1.3 2.3 1.1 3.4 1.7zm-21.9 1.7c1.2 0 2-1.2 3-1.7 1.1-.6 3.1-.4 3.5-1.6.2-.4-.2-.9-.6-1.1-1.6-.9-3.8-.6-5.5.1-1.3.6-3.4 1.5-3.2 2.9.1 1 1.8 1.5 2.8 1.4zM420 403.8c-3.6-4-5.3-11.6-7.2-19.7-1.8-8.1-3.9-16.8-10.5-22.4-1.3-1.1-2.6-2.1-4-2.9-1.3-.8-2.7-1.5-4.1-2 9.2-27.3 5.6-54.5-3.7-79.1-11.4-30.1-31.3-56.4-46.5-74.4-17.1-21.5-33.7-41.9-33.4-72C311.1 85.4 315.7.1 234.8 0 132.4-.2 158 103.4 156.9 135.2c-1.7 23.4-6.4 41.8-22.5 64.7-18.9 22.5-45.5 58.8-58.1 96.7-6 17.9-8.8 36.1-6.2 53.3-6.5 5.8-11.4 14.7-16.6 20.2-4.2 4.3-10.3 5.9-17 8.3s-14 6-18.5 14.5c-2.1 3.9-2.8 8.1-2.8 12.4 0 3.9.6 7.9 1.2 11.8 1.2 8.1 2.5 15.7.8 20.8-5.2 14.4-5.9 24.4-2.2 31.7 3.8 7.3 11.4 10.5 20.1 12.3 17.3 3.6 40.8 2.7 59.3 12.5 19.8 10.4 39.9 14.1 55.9 10.4 11.6-2.6 21.1-9.6 25.9-20.2 12.5-.1 26.3-5.4 48.3-6.6 14.9-1.2 33.6 5.3 55.1 4.1.6 2.3 1.4 4.6 2.5 6.7v.1c8.3 16.7 23.8 24.3 40.3 23 16.6-1.3 34.1-11 48.3-27.9 13.6-16.4 36-23.2 50.9-32.2 7.4-4.5 13.4-10.1 13.9-18.3.4-8.2-4.4-17.3-15.5-29.7zM223.7 87.3c9.8-22.2 34.2-21.8 44-.4 6.5 14.2 3.6 30.9-4.3 40.4-1.6-.8-5.9-2.6-12.6-4.9 1.1-1.2 3.1-2.7 3.9-4.6 4.8-11.8-.2-27-9.1-27.3-7.3-.5-13.9 10.8-11.8 23-4.1-2-9.4-3.5-13-4.4-1-6.9-.3-14.6 2.9-21.8zM183 75.8c10.1 0 20.8 14.2 19.1 33.5-3.5 1-7.1 2.5-10.2 4.6 1.2-8.9-3.3-20.1-9.6-19.6-8.4.7-9.8 21.2-1.8 28.1 1 .8 1.9-.2-5.9 5.5-15.6-14.6-10.5-52.1 8.4-52.1zm-13.6 60.7c6.2-4.6 13.6-10 14.1-10.5 4.7-4.4 13.5-14.2 27.9-14.2 7.1 0 15.6 2.3 25.9 8.9 6.3 4.1 11.3 4.4 22.6 9.3 8.4 3.5 13.7 9.7 10.5 18.2-2.6 7.1-11 14.4-22.7 18.1-11.1 3.6-19.8 16-38.2 14.9-3.9-.2-7-1-9.6-2.1-8-3.5-12.2-10.4-20-15-8.6-4.8-13.2-10.4-14.7-15.3-1.4-4.9 0-9 4.2-12.3zm3.3 334c-2.7 35.1-43.9 34.4-75.3 18-29.9-15.8-68.6-6.5-76.5-21.9-2.4-4.7-2.4-12.7 2.6-26.4v-.2c2.4-7.6.6-16-.6-23.9-1.2-7.8-1.8-15 .9-20 3.5-6.7 8.5-9.1 14.8-11.3 10.3-3.7 11.8-3.4 19.6-9.9 5.5-5.7 9.5-12.9 14.3-18 5.1-5.5 10-8.1 17.7-6.9 8.1 1.2 15.1 6.8 21.9 16l19.6 35.6c9.5 19.9 43.1 48.4 41 68.9zm-1.4-25.9c-4.1-6.6-9.6-13.6-14.4-19.6 7.1 0 14.2-2.2 16.7-8.9 2.3-6.2 0-14.9-7.4-24.9-13.5-18.2-38.3-32.5-38.3-32.5-13.5-8.4-21.1-18.7-24.6-29.9s-3-23.3-.3-35.2c5.2-22.9 18.6-45.2 27.2-59.2 2.3-1.7.8 3.2-8.7 20.8-8.5 16.1-24.4 53.3-2.6 82.4.6-20.7 5.5-41.8 13.8-61.5 12-27.4 37.3-74.9 39.3-112.7 1.1.8 4.6 3.2 6.2 4.1 4.6 2.7 8.1 6.7 12.6 10.3 12.4 10 28.5 9.2 42.4 1.2 6.2-3.5 11.2-7.5 15.9-9 9.9-3.1 17.8-8.6 22.3-15 7.7 30.4 25.7 74.3 37.2 95.7 6.1 11.4 18.3 35.5 23.6 64.6 3.3-.1 7 .4 10.9 1.4 13.8-35.7-11.7-74.2-23.3-84.9-4.7-4.6-4.9-6.6-2.6-6.5 12.6 11.2 29.2 33.7 35.2 59 2.8 11.6 3.3 23.7.4 35.7 16.4 6.8 35.9 17.9 30.7 34.8-2.2-.1-3.2 0-4.2 0 3.2-10.1-3.9-17.6-22.8-26.1-19.6-8.6-36-8.6-38.3 12.5-12.1 4.2-18.3 14.7-21.4 27.3-2.8 11.2-3.6 24.7-4.4 39.9-.5 7.7-3.6 18-6.8 29-32.1 22.9-76.7 32.9-114.3 7.2zm257.4-11.5c-.9 16.8-41.2 19.9-63.2 46.5-13.2 15.7-29.4 24.4-43.6 25.5s-26.5-4.8-33.7-19.3c-4.7-11.1-2.4-23.1 1.1-36.3 3.7-14.2 9.2-28.8 9.9-40.6.8-15.2 1.7-28.5 4.2-38.7 2.6-10.3 6.6-17.2 13.7-21.1.3-.2.7-.3 1-.5.8 13.2 7.3 26.6 18.8 29.5 12.6 3.3 30.7-7.5 38.4-16.3 9-.3 15.7-.9 22.6 5.1 9.9 8.5 7.1 30.3 17.1 41.6 10.6 11.6 14 19.5 13.7 24.6zM173.3 148.7c2 1.9 4.7 4.5 8 7.1 6.6 5.2 15.8 10.6 27.3 10.6 11.6 0 22.5-5.9 31.8-10.8 4.9-2.6 10.9-7 14.8-10.4s5.9-6.3 3.1-6.6-2.6 2.6-6 5.1c-4.4 3.2-9.7 7.4-13.9 9.8-7.4 4.2-19.5 10.2-29.9 10.2s-18.7-4.8-24.9-9.7c-3.1-2.5-5.7-5-7.7-6.9-1.5-1.4-1.9-4.6-4.3-4.9-1.4-.1-1.8 3.7 1.7 6.5z"/></svg>
                    <span class="ml-1">GNU/Linux Admin</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Scripting &amp; Automation</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M349.9 236.3h-66.1v-59.4h66.1v59.4zm0-204.3h-66.1v60.7h66.1V32zm78.2 144.8H362v59.4h66.1v-59.4zm-156.3-72.1h-66.1v60.1h66.1v-60.1zm78.1 0h-66.1v60.1h66.1v-60.1zm276.8 100c-14.4-9.7-47.6-13.2-73.1-8.4-3.3-24-16.7-44.9-41.1-63.7l-14-9.3-9.3 14c-18.4 27.8-23.4 73.6-3.7 103.8-8.7 4.7-25.8 11.1-48.4 10.7H2.4c-8.7 50.8 5.8 116.8 44 162.1 37.1 43.9 92.7 66.2 165.4 66.2 157.4 0 273.9-72.5 328.4-204.2 21.4.4 67.6.1 91.3-45.2 1.5-2.5 6.6-13.2 8.5-17.1l-13.3-8.9zm-511.1-27.9h-66v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm-78.1-72.1h-66.1v60.1h66.1v-60.1z"/></svg>
                    <span class="ml-1">Docker</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">CI/CD</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">DNS</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Email Transport</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">IP Networking</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">UI/UX</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Troubleshooting</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">
                    <svg aria-hidden="true" class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.3 8 8 119.2 8 256c0 136.7 111.3 248 248 248s248-111.3 248-248C504 119.2 392.7 8 256 8zM33 256c0-32.3 6.9-63 19.3-90.7l106.4 291.4C84.3 420.5 33 344.2 33 256zm223 223c-21.9 0-43-3.2-63-9.1l66.9-194.4 68.5 187.8c.5 1.1 1 2.1 1.6 3.1-23.1 8.1-48 12.6-74 12.6zm30.7-327.5c13.4-.7 25.5-2.1 25.5-2.1 12-1.4 10.6-19.1-1.4-18.4 0 0-36.1 2.8-59.4 2.8-21.9 0-58.7-2.8-58.7-2.8-12-.7-13.4 17.7-1.4 18.4 0 0 11.4 1.4 23.4 2.1l34.7 95.2L200.6 393l-81.2-241.5c13.4-.7 25.5-2.1 25.5-2.1 12-1.4 10.6-19.1-1.4-18.4 0 0-36.1 2.8-59.4 2.8-4.2 0-9.1-.1-14.4-.3C109.6 73 178.1 33 256 33c58 0 110.9 22.2 150.6 58.5-1-.1-1.9-.2-2.9-.2-21.9 0-37.4 19.1-37.4 39.6 0 18.4 10.6 33.9 21.9 52.3 8.5 14.8 18.4 33.9 18.4 61.5 0 19.1-7.3 41.2-17 72.1l-22.2 74.3-80.7-239.6zm81.4 297.2l68.1-196.9c12.7-31.8 17-57.2 17-79.9 0-8.2-.5-15.8-1.5-22.9 17.4 31.8 27.3 68.2 27.3 107 0 82.3-44.6 154.1-110.9 192.7z"/></svg>
                    <span class="ml-1">WordPress</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-indigo-50 text-indigo-800 rounded">Responsive Design</li>
            </ul>
        </div>

        <hr class="mt-6 border-gray-200" />

        <h2 class="mt-6 font-semibold text-xl uppercase tracking-wide">Professional Experience</h2>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                Jan<br class="hidden sm:inline">
                2020
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Mobile App Developer</p>
                <p><a class="text-purple-700 font-semibold" href="https://liveplatforms.com/" target="_blank">Live Platforms</a></p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>Provided advice on the selection of NativeScript-Vue for the development of a new mobile app.</li>
                    <li>Created a proof of concept to demonstrate the suitability and workflow of the framework.</li>
                    <li>Assisted with the development of the initial iOS release.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                Dec<br class="hidden sm:inline">
                2019
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Podcast Guest</p>
                <p><a class="text-purple-700 font-semibold" href="https://www.happydev.fm/" target="_blank">The Happy Dev Podcast</a></p>
                <p class="mt-3">Towards the end of 2019 I was invited by <a href="https://twitter.com/jbrooksuk/">James Brooks (Laravel employee #3)</a> to speak on his podcast about mental health in the software development industry.</p>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                Oct<br class="hidden sm:inline">
                2019
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Conference Speaker</p>
                <p><a class="text-purple-700 font-semibold" href="https://laracon.com.au/" target="_blank">Laracon AU</a></p>
                <p class="mt-3">In 2019 I started my speaking career at Laracon AU where I gave a talk titled <i>“The Laravel Developer's Guide to Vue SPAs”</i>.</p>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">now</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2019</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Podcast Co-host</p>
                <p><a class="text-purple-700 font-semibold" href="https://basecodefieldguide.com/podcast" target="_blank">The BaseCode Podcast</a></p>
                <p class="mt-3">In 2018 I teamed up with Jason McCreary, aka JMac (of Laracon and Laravel Shift fame) to start the BaseCode Podcast.</p>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">now</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2019</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Co-founder and Lead Developer</p>
                <p><a class="text-purple-700 font-semibold" href="https://giftyduck.com/" target="_blank">GiftyDuck</a></p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>Product development and ideation.</li>
                    <li>User interface design.</li>
                    <li>Set up of CI/CD pipelines with linting, static analysis, and test stages, with deployment to staging and production instances on Amazon Lambda using Laravel Forge.</li>
                    <li>Design and development of a Vue SPA with Laravel API.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">2019</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2015</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Senior Web Application Developer</p>
                <p><a class="text-purple-700 font-semibold" href="http://infoxchange.org/" target="_blank">Infoxchange</a></p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>Lead developer on the <a class="font-semibold border-b border-dotted border-purple-300" href="https://policereferrals.org.au/" target="_blank">Queensland Police Referral System</a>, used by officers on their iPads and workstations to send over 100,000 referrals to over 500 service providers across Australia.</li>
                    <li>Added countles features to the <a class="font-semibold border-b border-dotted border-purple-300" href="https://www.infoxchange.org/au/products-and-services/client-case-management" target="_blank">SRS Client Case Management System</a>, used by more than 3,500 services to help over half a million people each year.</li>
                    <li>Provided mentorship to team-mates.</li>
                    <li>Go-to person to troubleshoot and find the root-cause of problems.</li>
                    <li>Liaised directly with clients as required.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">2015</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2012</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Senior Web Developer</p>
                <p class="font-semibold">iiWorks / WebDesignWorks</p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>WordPress and WooCommerce plugin and theme development.</li>
                    <li>Front-end and back-end web development.</li>
                    <li>Responsive design.</li>
                    <li>Primarily working with the hotel industry.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">2012</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2008</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">Web Developer</p>
                <p class="font-semibold">Mediaglue</p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>Web design and development.</li>
                    <li>Graphic design, including logo design.</li>
                    <li>Web app development, including the creation of POS system with touch screen, receipt printer, and cash drawer.</li>
                    <li>Software integrations.</li>
                    <li>Client liaising.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-indigo-50 rounded-lg text-indigo-700 font-bold text-center leading-none tracking-wide
                    sm:h-20 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                "
            >
                <div>
                    <span class="inline sm:block">2008</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2004</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold">IT Consultant</p>
                <p class="font-semibold">Self-employed</p>
                <ul class="mt-3 pl-4 list-disc">
                    <li>Windows and server and workstation setup &amp; administration.</li>
                    <li>Linux server setup &amp; administration.</li>
                    <li>Networking.</li>
                    <li>Troubleshooting and support.</li>
                    <li>Project management.</li>
                    <li>Web app development including a chemical warehouse inventory management system and banking anti-phishing software.</li>
                    <li>Web design.</li>
                </ul>
            </div>
        </div>

        <hr class="mt-6 border-gray-200" />

        <h2 class="mt-6 font-semibold text-xl uppercase tracking-wide">Awards</h2>

        <div class="mt-6">
            <div class="flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M44 11h-1.368c.33-2.316.518-4.648.568-6.986A3.913 3.913 0 0039.388.002C39.356 0 39.324 0 39.292 0H8.73a3.92 3.92 0 00-3.912 4.01c.05 2.342.238 4.68.564 7H4c-2.21 0-4 1.79-4 4V20a10.037 10.037 0 006.532 9.382 2.002 2.002 0 001.386-3.754A6.026 6.026 0 014 20v-5h2.132c2.754 11.058 10.778 15.348 17.6 15.348 11.218 0 16.444-8.64 18.142-15.348H44v5a6.026 6.026 0 01-3.918 5.628 2.002 2.002 0 001.386 3.754A10.04 10.04 0 0048 20v-5c0-2.21-1.79-4-4-4zM19.366 21.418a1.044 1.044 0 01-1.43-.376 1.049 1.049 0 01-.062-.932L19.66 16a.496.496 0 00-.108-.556l-3.226-3.168a.98.98 0 01.688-1.712h3.68a.501.501 0 00.454-.288l1.924-4.142a1.062 1.062 0 011.884 0l1.922 4.14c.08.176.258.29.452.29h3.682a.98.98 0 01.69 1.712l-3.228 3.174a.505.505 0 00-.108.55l1.788 4.104a1.048 1.048 0 01-1.492 1.308l-4.4-2.476a.498.498 0 00-.49 0l-4.406 2.482zm4.36 11.93c-1.046 0-2.088-.078-3.122-.234a.498.498 0 00-.572.508c.18 6.724-4.648 6.446-5.016 6.484A3.958 3.958 0 0015.4 48h17.218a3.938 3.938 0 003.912-3.964V44A3.897 3.897 0 0033 40.106c-3.034-.298-5.328-1.6-5.142-6.506a.505.505 0 00-.166-.4.495.495 0 00-.4-.124c-1.18.176-2.372.268-3.566.272z"/></svg>

                <div class="ml-4">
                    <div class="font-bold">Excellence Award</div>
                    <div class="text-sm">2018 &bullet; Infoxchange</div>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M13.05 20.27l6.226-.358 2.384 6.046a2.52 2.52 0 002.5 1.6 2.56 2.56 0 002.362-1.894l2-7.154 7.152-2a2.557 2.557 0 001.896-2.36 2.514 2.514 0 00-1.6-2.502l-6.058-2.374.36-6.276A2.52 2.52 0 0028.75.624a2.46 2.46 0 00-2.73.576l-3.772 3.77-6.612-2.628-.06-.024a2.588 2.588 0 00-3.236 3.318l2.626 6.616-3.766 3.77a2.462 2.462 0 00-.58 2.722 2.544 2.544 0 002.4 1.526h.03zm1.518 19.298c-1.656 0-3 1.344-3 3v4a1 1 0 001 1h24a1 1 0 001-1v-4c0-1.656-1.344-3-3-3h-20zm18-3a1 1 0 001-1v-3a3.694 3.694 0 00-2.696-3.454l-6.06-1.516a.953.953 0 00-.486 0l-6.058 1.514a3.698 3.698 0 00-2.7 3.456v3a1 1 0 001 1h16z"/></svg>

                <div class="ml-4">
                    <div class="font-bold">"The Laravel Queen" Award</div>
                    <div class="text-sm">2017 &bullet; Infoxchange</div>
                    <p class="mt-2">Awarded for my passion of the Laravel framework.</p>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M13.05 20.27l6.226-.358 2.384 6.046a2.52 2.52 0 002.5 1.6 2.56 2.56 0 002.362-1.894l2-7.154 7.152-2a2.557 2.557 0 001.896-2.36 2.514 2.514 0 00-1.6-2.502l-6.058-2.374.36-6.276A2.52 2.52 0 0028.75.624a2.46 2.46 0 00-2.73.576l-3.772 3.77-6.612-2.628-.06-.024a2.588 2.588 0 00-3.236 3.318l2.626 6.616-3.766 3.77a2.462 2.462 0 00-.58 2.722 2.544 2.544 0 002.4 1.526h.03zm1.518 19.298c-1.656 0-3 1.344-3 3v4a1 1 0 001 1h24a1 1 0 001-1v-4c0-1.656-1.344-3-3-3h-20zm18-3a1 1 0 001-1v-3a3.694 3.694 0 00-2.696-3.454l-6.06-1.516a.953.953 0 00-.486 0l-6.058 1.514a3.698 3.698 0 00-2.7 3.456v3a1 1 0 001 1h16z"/></svg>

                <div class="ml-4">
                    <div class="font-bold">"The Honourable Constable" Award</div>
                    <div class="text-sm">2016 &bullet; Infoxchange</div>
                    <p class="mt-2">Awarded for my work on the Queensland Police Referral System.</p>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M46.094 22.75a5.446 5.446 0 00-4.482-2.738 5.486 5.486 0 00-9.22 0A5.49 5.49 0 0027.782 28 5.452 5.452 0 0030 35.288V47a1.002 1.002 0 001.64.77L37 43.3l5.36 4.47A1 1 0 0044 47V35.288A5.45 5.45 0 0046.224 28a5.443 5.443 0 00-.13-5.25zm-15.362 4.31a2.486 2.486 0 012.322-4.02 1.501 1.501 0 001.626-.942 2.487 2.487 0 014.644 0 1.507 1.507 0 001.626.938 2.484 2.484 0 012.322 4.024c-.44.55-.44 1.332 0 1.882a2.484 2.484 0 01-2.322 4.018 1.517 1.517 0 00-1.624.938 2.487 2.487 0 01-4.646 0 1.499 1.499 0 00-1.63-.938 2.488 2.488 0 01-2.324-4.026 1.5 1.5 0 00.006-1.874zM37 24c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm8-24H3C1.344 0 0 1.344 0 3v28c0 1.656 1.344 3 3 3h21a1 1 0 001-1v-4a1 1 0 00-1-1H12.35a.501.501 0 01-.49-.4 7.02 7.02 0 00-5.46-5.46.497.497 0 01-.4-.49v-9.56c0-.092.066-.17.156-.184A7.022 7.022 0 0011.86 6.4a.497.497 0 01.49-.4h23.3c.238 0 .444.166.49.4a7.025 7.025 0 005.46 5.46c.234.046.4.252.4.49V16c0 .378.214.724.552.894l4 2A1 1 0 0048 18V3c0-1.656-1.344-3-3-3z"/></svg>

                <div class="ml-4">
                    <div class="font-bold">Queensland Police Service Awards for Excellence 2016 - Customer Focus - Gold Award</div>
                    <div class="text-sm">2016 &bullet; Queensland Police Service</div>
                    <p class="mt-2">Awarded for my work on the Queensland Police Referral System.</p>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M13.05 20.27l6.226-.358 2.384 6.046a2.52 2.52 0 002.5 1.6 2.56 2.56 0 002.362-1.894l2-7.154 7.152-2a2.557 2.557 0 001.896-2.36 2.514 2.514 0 00-1.6-2.502l-6.058-2.374.36-6.276A2.52 2.52 0 0028.75.624a2.46 2.46 0 00-2.73.576l-3.772 3.77-6.612-2.628-.06-.024a2.588 2.588 0 00-3.236 3.318l2.626 6.616-3.766 3.77a2.462 2.462 0 00-.58 2.722 2.544 2.544 0 002.4 1.526h.03zm1.518 19.298c-1.656 0-3 1.344-3 3v4a1 1 0 001 1h24a1 1 0 001-1v-4c0-1.656-1.344-3-3-3h-20zm18-3a1 1 0 001-1v-3a3.694 3.694 0 00-2.696-3.454l-6.06-1.516a.953.953 0 00-.486 0l-6.058 1.514a3.698 3.698 0 00-2.7 3.456v3a1 1 0 001 1h16z"/></svg>

                <div class="ml-4">
                    <div class="font-bold">"Best Newcomer" Award</div>
                    <div class="text-sm">2015 &bullet; Infoxchange</div>
                </div>
            </div>
        </div>

        <hr class="mt-6 border-gray-200" />

        <p class="mt-6 text-xs text-gray-400">
            Brand icons credit: <a href="https://fontawesome.com/license" target="_blank">Font Awesome</a>
        </p>
    </div>

@endsection
