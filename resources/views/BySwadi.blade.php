<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tsh Fiir</title>
    <style>
        /**
         * My Presets
         */
        /* Document
           ========================================================================== */

        /**
         * 1. Correct the line height in all browsers.
         * 2. Prevent adjustments of font size after orientation changes in iOS.
         */

        html {
            line-height: 1.15; /* 1 */
            -webkit-text-size-adjust: 100%; /* 2 */
        }

        /* Sections
           ========================================================================== */

        /**
         * Remove the margin in all browsers.
         */

        body {
            margin: 0;
        }

        /**
         * Render the `main` element consistently in IE.
         */

        main {
            display: block;
        }

        /**
         * Correct the font size and margin on `h1` elements within `section` and
         * `article` contexts in Chrome, Firefox, and Safari.
         */

        /* Grouping content
           ========================================================================== */

        /**
         * 1. Add the correct box sizing in Firefox.
         * 2. Show the overflow in Edge and IE.
         */

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */

        pre {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /* Text-level semantics
           ========================================================================== */

        /**
         * Remove the gray background on active links in IE 10.
         */

        a {
            background-color: transparent;
        }

        /**
         * 1. Remove the bottom border in Chrome 57-
         * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
         */

        /**
         * Add the correct font weight in Chrome, Edge, and Safari.
         */

        b,
        strong {
            font-weight: bolder;
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */

        code {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /**
         * Add the correct font size in all browsers.
         */

        /**
         * Prevent `sub` and `sup` elements from affecting the line height in
         * all browsers.
         */

        /* Embedded content
           ========================================================================== */

        /**
         * Remove the border on images inside links in IE 10.
         */

        /* Forms
           ========================================================================== */

        /**
         * 1. Change the font styles in all browsers.
         * 2. Remove the margin in Firefox and Safari.
         */

        button,
        input,
        select,
        textarea {
            font-family: inherit; /* 1 */
            font-size: 100%; /* 1 */
            line-height: 1.15; /* 1 */
            margin: 0; /* 2 */
        }

        /**
         * Show the overflow in IE.
         * 1. Show the overflow in Edge.
         */

        button,
        input { /* 1 */
            overflow: visible;
        }

        /**
         * Remove the inheritance of text transform in Edge, Firefox, and IE.
         * 1. Remove the inheritance of text transform in Firefox.
         */

        button,
        select { /* 1 */
            text-transform: none;
        }

        /**
         * Correct the inability to style clickable types in iOS and Safari.
         */

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        /**
         * Remove the inner border and padding in Firefox.
         */

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
         * Restore the focus styles unset by the previous rule.
         */

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /**
         * Correct the padding in Firefox.
         */

        /**
         * 1. Correct the text wrapping in Edge and IE.
         * 2. Correct the color inheritance from `fieldset` elements in IE.
         * 3. Remove the padding so developers are not caught out when they zero out
         *    `fieldset` elements in all browsers.
         */

        legend {
            box-sizing: border-box; /* 1 */
            color: inherit; /* 2 */
            display: table; /* 1 */
            max-width: 100%; /* 1 */
            padding: 0; /* 3 */
            white-space: normal; /* 1 */
        }

        /**
         * Add the correct vertical alignment in Chrome, Firefox, and Opera.
         */

        /**
         * Remove the default vertical scrollbar in IE 10+.
         */

        textarea {
            overflow: auto;
        }

        /**
         * 1. Add the correct box sizing in IE 10.
         * 2. Remove the padding in IE 10.
         */

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box; /* 1 */
            padding: 0; /* 2 */
        }

        /**
         * Correct the cursor style of increment and decrement buttons in Chrome.
         */

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        /**
         * 1. Correct the odd appearance in Chrome and Safari.
         * 2. Correct the outline style in Safari.
         */

        [type="search"] {
            -webkit-appearance: textfield; /* 1 */
            outline-offset: -2px; /* 2 */
        }

        /**
         * Remove the inner padding in Chrome and Safari on macOS.
         */

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
         * 1. Correct the inability to style clickable types in iOS and Safari.
         * 2. Change font properties to `inherit` in Safari.
         */

        ::-webkit-file-upload-button {
            -webkit-appearance: button; /* 1 */
            font: inherit; /* 2 */
        }

        /* Interactive
           ========================================================================== */

        /*
         * Add the correct display in Edge, IE 10+, and Firefox.
         */

        /*
         * Add the correct display in all browsers.
         */

        /* Misc
           ========================================================================== */

        /**
         * Add the correct display in IE 10+.
         */

        template {
            display: none;
        }

        /**
         * Add the correct display in IE 10.
         */

        [hidden] {
            display: none;
        }

        /**
         * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
         * A thin layer on top of normalize.css that provides a starting point more
         * suitable for web applications.
         */

        /**
         * 1. Prevent padding and border from affecting element width
         * https://goo.gl/pYtbK7
         * 2. Change the default font family in all browsers (opinionated)
         */

        html {
            box-sizing: border-box; /* 1 */
            font-family: sans-serif; /* 2 */
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        /**
         * Removes the default spacing and border for appropriate elements.
         */


        dl,
        dd,
        h2,
        h3,
        h5,
        p,
        pre {
            margin: 0;
        }

        button {
            background: transparent;
            padding: 0;
        }

        /**
         * Work around a Firefox/IE bug where the transparent `button` background
         * results in a loss of the default `button` focus styles.
         */

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
    </style>
    <style>
        /**
        My Style
         */
        body {
            background-color: #eeeef5;
            color: rgb(51, 47, 81);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            line-height: 1.5;
            width: 100%;
        }
        .container {
             background-color: #ffffff;
        }
        a {
            text-decoration: none;
        }
        a {
            color: #ffffff;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
    <style>
        header {
            margin-top: 30px;
        }
        header,
        header > .container {
            background-color: rgb(75, 71, 109);
            position: sticky;
            top: -30px;
            margin-top: 48px;
        }
        .header-top {
            display: flex;
            justify-content: space-between;
            margin: 0;
        }
        .header-top, h1 {
            margin: 3px;
            font-size: 1rem;
        }
        nav {
            display: flex;
            justify-content: center;
            height: 48px;
        }

        nav > a {
            padding: 0 30px;
            margin: auto 10px;
            background-color: rgba(30, 20, 70, 0.5);border-radius: 0.125rem;
            color: #ffffff;
            border: 0;
            height: 30px;
        }
        nav > a:hover {
            cursor: pointer;
        }

        @media (max-width: 576px) {
            header > .container {
                height: 144px;
                top: -25px;
            }
            nav {
                margin-top: 30px;
                height: 45px;
                flex-direction: column;
            }
            nav > a {
                margin-top: 3px;
                justify-content: center;
                display: flex;
            }
        }
        @media (min-width: 576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px
            }
        }
    </style>
</head>
<body>
<header class="container">
    <div class="container">
        <div class="header-top">
            <h1>XCast</h1>
            <a href="#">signin</a>
        </div>
        <nav>
            <a href="#">
{{--                <button>--}}
                    Catalog
{{--                </button>--}}
            </a>
            <a href="#">
{{--                <button>--}}
                    Series
{{--                </button>--}}
            </a>
            <a href="#">
{{--                <button>--}}
                    Poscast
{{--                </button>--}}
            </a>
            <a href="#">
{{--                <button>--}}
                    Discussion
{{--                </button>--}}
            </a>
        </nav>
    </div>
</header>
<div class="container">
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
    <p>any text</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
