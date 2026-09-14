<style>
    :root {
        --motion-ease: cubic-bezier(.22, 1, .36, 1);
    }

    .motion-enabled .public-page {
        opacity: 0;
        transform: translateY(28px) scale(.985);
        filter: blur(5px);
        transition: opacity .65s var(--motion-ease), transform .65s var(--motion-ease),
            filter .45s ease;
    }

    .motion-enabled.is-ready .public-page {
        opacity: 1;
        transform: translateY(0) scale(1);
        filter: blur(0);
    }

    .motion-enabled.is-leaving .public-page {
        opacity: 0;
        transform: translateY(-16px) scale(.99);
        filter: blur(4px);
        pointer-events: none;
    }

    
    header a,
    footer a,
    .public-page button,
    .public-page label[for],
    .public-page input[type='submit'],
    .public-page input[type='button'] {
        transition: transform .22s var(--motion-ease), box-shadow .22s var(--motion-ease),
            filter .22s ease, background-color .22s ease, color .22s ease,
            border-color .22s ease;
    }

    header a:hover,
    footer a:hover,
    .public-page button:not(:disabled):hover,
    .public-page label[for]:hover,
    .public-page input[type='submit']:hover,
    .public-page input[type='button']:hover {
        transform: translateY(-2px);
    }

    .public-page button:not(:disabled):hover,
    .public-page input[type='submit']:hover,
    .public-page input[type='button']:hover {
        filter: brightness(1.08);
        box-shadow: 0 8px 20px rgba(0, 141, 213, .18);
    }

    .public-page :is(a, button, input, textarea, select):focus-visible,
    header a:focus-visible,
    footer a:focus-visible {
        outline: 2px solid #008DD5;
        outline-offset: 3px;
    }

    
    header a img,
    footer a img,
    .public-page a img {
        transition: transform .25s var(--motion-ease), filter .25s ease;
    }

    header a:hover img,
    footer a:hover img,
    .public-page a:hover img {
        transform: scale(1.08);
        filter: brightness(1.1);
    }

    
    .public-page div[class*='rounded-xl'],
    .public-page div[class*='rounded-2xl'] {
        transition: transform .28s var(--motion-ease), box-shadow .28s ease,
            border-color .28s ease, background-color .28s ease;
    }

    .public-page div[class*='rounded-xl']:hover,
    .public-page div[class*='rounded-2xl']:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(0, 0, 0, .22), 0 0 0 1px rgba(0, 141, 213, .18);
    }

    @media (prefers-reduced-motion: reduce) {
        *, *::before, *::after {
            animation-duration: .01ms !important;
            animation-iteration-count: 1 !important;
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
        }
    }
</style>
