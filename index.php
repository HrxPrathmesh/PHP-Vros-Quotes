<?php

$quotes = [
  [
    'author' => 'Naval Ravikant',
    'text' => 'Spend as much time as possible creating new things.',
  ],
  [
    'author' => 'Tim Ferriss',
    'text' => 'What we fear doing most is usually what we most need to do.',
  ],
  [
    'author' => 'Naval Ravikant',
    'text' => 'Seek wealth, not money or status. Wealth is having assets that earn while you sleep.',
  ],
  [
    'author' => 'Tim Ferriss',
    'text' => 'Being busy is a form of laziness - lazy thinking and indiscriminate action.',
  ],
  [
    'author' => 'Naval Ravikant',
    'text' => 'The most important thing you can do is to read, learn, and apply what you learn to your life.',
  ],
  [
    'author' => 'David Goggins',
    'text' => 'The most important conversation you will ever have is the one you have with yourself.',
  ],
  [
    'author' => 'Jordan Peterson',
    'text' => 'Compare yourself to who you were yesterday, not to who someone else is today.',
  ],
  [
    'author' => 'Jordan Peterson',
    'text' => 'Treat yourself like someone you are responsible for helping.',
  ],

];

$quote = $quotes[rand(0, count($quotes) - 1)];
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vros Quotes</title>
</head>

<body>
  <header class="relative z-10 flex items-center justify-between px-4 py-4 mx-auto max-w-7xl sm:px-8 sm:py-6" role="banner">
    <a class="block flex-none" href="">
      <img class="w-40 block md:hidden" alt="Maybe Logo" src="/Vros Black.png">
      <img class="w-40 hidden md:block" alt="Maybe Logo" src="/Vros Black.png">
    </a>
    <nav class="hidden sm:block">
      <ul class="flex space-x-6">
        <li>
          <a class="p-0.5 block text-white opacity-50 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https:instagram.com/vroscode">CODE</a>
        </li>
        <li>
          <a class="p-0.5 block text-white opacity-50 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https:instagram.com/vrosbooks">BOOKS</a>
        </li>
        <li>
          <a class="p-0.5 block text-white opacity-50 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https:instagram.com/vroscommunity">COMMUNITY</a>
        </li>
        <li>
          <a class="p-0.5 block text-white opacity-50 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https:instagram.com/vroscommunitystore">STORE</a>
        </li>
      </ul>
    </nav>
    <a id="toprf" onclick="tweet()" class="font-semibold text-sm bg-teal text-black rounded-md py-2 px-4 transition-colors hover:bg-teal-500" href="/">Tweet <i id="rightline" class="ri-arrow-right-line ml-1"></i></a>
  </header>

  <script>
    function tweet() {
      window.open("https://twitter.com/intent/tweet?text=" + quote.innerHTML)
    }

    function getquote() {}
  </script>




  <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-8">
    <h1 id="qotd" class="mb-4 text-4xl font-extrabold leading-tight xs:text-5xl text-blue-700 sm:text-7xl sm:leading-tight sm:max-w-lg md:max-w-5xl"> Quote of the day</h1>

    <h1 id="quote" class="mt-12 mb-8 leading-normal xs:text-lg sm:text-xl sm:max-w-lg opacity-80">&ldquo;<?php echo $quoteText ?>&rdquo;</h1>
    <br>

    <strong class="an an mb-8 leading-normal xs:text-lg sm:text-xl sm:max-w-lg opacity-80"> - <?php echo $quoteAuthor; ?></strong>
  </div>

  <div class="relative z-10 px-4 mt-6 mx-auto max-w-7xl sm:px-8 ">

    <a class="font-semibold text-sm bg-teal text-black rounded-md py-2 px-4 transition-colors hover:bg-teal-500" href="/">
      New Quote</a>

    <button class=" font-semibold text-sm bg-blue text-black rounded-md py-2 px-4 transition-colors hover:bg-blue-500" onclick="tweet()">

      Tweet</button>
  </div>

  <footer id="font-footer" class="px-4 py-4 mx-auto mt-4 mb-20 space-y-10 max-w-7xl md:space-y-0 sm:grid sm:grid-cols-4 md:grid-cols-5 gap-x-4">
    <div class="text-xs text-white text-opacity-50 sm:col-span-4 md:col-span-1">

      <div class="mb-4 space-y-4">
        <a class="block flex-none" href="/">
          <img class="w-40" alt="Vros Logo" src="Vros Black.png" />
        </a>
        <div class="font-semibold space-y-1">
          <p class="font-semibold text-gray-700">&copy; 2023 Vros Community, Inc.</p>
          <p class="font-semibold"><a href="mailto:vroscommunity@gmail.com">
              vroscommunity@gmail.com</p>
        </div>
      </div>
      <p class="font-normal">
        He who has Why to live for can bear with almost any how.
      </p>
    </div>


    <div>
      <h6 class="mb-4 text-sm">Company</h6>

      <ul class="space-y-2 font-normal">
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">About</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Security</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Jobs</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Articles</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Dictionary</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Podcast</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Newsletter</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Privacy</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="/">Terms</a>
        </li>
      </ul>
    </div>


    <div>
      <h6 class="mb-4 text-lg">Built in public</h6>

      <ul class="space-y-2 text-sm font-normal">

        <li>
          <a href="https://twitter.com/vrosofficial" class="transition-opacity opacity-70 hover:opacity-100 hover:gradient-bottom-border">Vros Official</a>
        </li>

        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https://twitter.com/vroscode">Vros Code</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https://twitter.com/vrosbooks">Vros Books</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https://twitter.com/vroscommunitystore">Vros Store</a>
        </li>
        <li>
          <a class="opacity-70 transition-opacity hover:opacity-100 hover:gradient-bottom-border" href="https://twitter.com/vroscommunity">Vros Community</a>
        </li>
      </ul>
    </div>
    <div>
      <h6 class="mb-4 text-sm ">Stay in touch</h6>

      <div class="sm:max-w-48 flex">
        <div class="grid grid-cols-6 sm:grid-cols-3 gap-y-6 ">
          <a class='mx-3' href="https://www.instagram.com/vroscommunity">

            <svg width="20" height="20" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_9914_10)">
                <path d="M12 0C5.374 0 0 5.373 0 12C0 17.302 3.438 21.8 8.207 23.387C8.806 23.498 9 23.126 9 22.81V20.576C5.662 21.302 4.967 19.16 4.967 19.16C4.421 17.773 3.634 17.404 3.634 17.404C2.545 16.659 3.717 16.675 3.717 16.675C4.922 16.759 5.556 17.912 5.556 17.912C6.626 19.746 8.363 19.216 9.048 18.909C9.155 18.134 9.466 17.604 9.81 17.305C7.145 17 4.343 15.971 4.343 11.374C4.343 10.063 4.812 8.993 5.579 8.153C5.455 7.85 5.044 6.629 5.696 4.977C5.696 4.977 6.704 4.655 8.997 6.207C9.954 5.941 10.98 5.808 12 5.803C13.02 5.808 14.047 5.941 15.006 6.207C17.297 4.655 18.303 4.977 18.303 4.977C18.956 6.63 18.545 7.851 18.421 8.153C19.191 8.993 19.656 10.064 19.656 11.374C19.656 15.983 16.849 16.998 14.177 17.295C14.607 17.667 15 18.397 15 19.517V22.81C15 23.129 15.192 23.504 15.801 23.386C20.566 21.797 24 17.3 24 12C24 5.373 18.627 0 12 0Z" fill="currentColor"></path>
              </g>
              <defs>
                <clipPath id="clip0_9914_10">
                  <rect width="24" height="24" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>


            <a href="https://www.instaggithub.com/hrxprathmesh">

              <svg width="20" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#a)">
                  <path d="M21.479 4.937c.015.209.015.418.015.628 0 6.424-4.917 13.832-13.906 13.832v-.004a13.89 13.89 0 0 1-7.491-2.18 9.847 9.847 0 0 0 7.233-2.015 4.89 4.89 0 0 1-4.566-3.375c.732.14 1.487.112 2.206-.084a4.868 4.868 0 0 1-3.92-4.764v-.062c.68.376 1.44.585 2.218.608a4.851 4.851 0 0 1-1.513-6.49 13.896 13.896 0 0 0 10.073 5.078 4.848 4.848 0 0 1 1.414-4.644 4.911 4.911 0 0 1 6.914.21A9.84 9.84 0 0 0 23.26.496a4.884 4.884 0 0 1-2.149 2.69 9.76 9.76 0 0 0 2.807-.766 9.898 9.898 0 0 1-2.439 2.518Z" fill="currentColor"></path>
                </g>
                <defs>
                  <clipPath id="clip0_9914_10">
                    <rect width="24" height="24" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>
        </div>
      </div>
    </div>

  </footer>
</body>

</html>















<!-- CSS -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

  /*! tailwindcss v2.2.17 | MIT License | https://tailwindcss.com */

  /*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */

  * {
    font-family: "SF Pro Display", "Inter";
  }


  .p-0 {
    padding: 0;
  }

  .p-1 {
    padding: 0.25rem;
  }

  .p-2 {
    padding: 0.5rem;
  }

  .p-3 {
    padding: 0.75rem;
  }

  .p-4 {
    padding: 1rem;
  }

  .p-5 {
    padding: 1.25rem;
  }

  .p-6 {
    padding: 1.5rem;
  }

  .p-8 {
    padding: 2rem;
  }

  .p-10 {
    padding: 2.5rem;
  }

  .p-0\.5 {
    padding: 0.125rem;
  }

  .p-1\.5 {
    padding: 0.375rem;
  }

  .p-2\.5 {
    padding: 0.625rem;
  }

  .px-0 {
    padding-left: 0;
    padding-right: 0;
  }

  .px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .px-2\.5 {
    padding-left: 0.625rem;
    padding-right: 0.625rem;
  }

  .py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .py-18 {
    padding-top: 4.5rem;
    padding-bottom: 4.5rem;
  }

  .py-0\.5 {
    padding-top: 0.125rem;
    padding-bottom: 0.125rem;
  }

  .pt-1 {
    padding-top: 0.25rem;
  }

  .pt-2 {
    padding-top: 0.5rem;
  }

  .pt-3 {
    padding-top: 0.75rem;
  }

  .pt-4 {
    padding-top: 1rem;
  }

  .pt-5 {
    padding-top: 1.25rem;
  }

  .pt-6 {
    padding-top: 1.5rem;
  }

  .pt-10 {
    padding-top: 2.5rem;
  }

  .pt-14 {
    padding-top: 3.5rem;
  }

  .pt-16 {
    padding-top: 4rem;
  }

  .pt-20 {
    padding-top: 5rem;
  }

  .pr-0 {
    padding-right: 0;
  }

  .pr-2 {
    padding-right: 0.5rem;
  }

  .pr-3 {
    padding-right: 0.75rem;
  }

  .pr-12 {
    padding-right: 3rem;
  }

  .pr-2\.5 {
    padding-right: 0.625rem;
  }

  .pb-2 {
    padding-bottom: 0.5rem;
  }

  .pb-4 {
    padding-bottom: 1rem;
  }

  .pb-10 {
    padding-bottom: 2.5rem;
  }

  .pb-12 {
    padding-bottom: 3rem;
  }

  .pb-16 {
    padding-bottom: 4rem;
  }

  .pb-20 {
    padding-bottom: 5rem;
  }

  .pb-24 {
    padding-bottom: 6rem;
  }

  .pb-30 {
    padding-bottom: 7.5rem;
  }

  .pb-32 {
    padding-bottom: 8rem;
  }

  .pl-1 {
    padding-left: 0.25rem;
  }

  .pl-2 {
    padding-left: 0.5rem;
  }

  .pl-3 {
    padding-left: 0.75rem;
  }

  .pl-4 {
    padding-left: 1rem;
  }

  .pl-7 {
    padding-left: 1.75rem;
  }

  .pl-2\.5 {
    padding-left: 0.625rem;
  }

  html {
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
  }

  @font-face {
    font-family: Helveticas;
    src: url(/NeueMontreal-Regular.otf);
  }


  #quote {
    font-size: xx-large;
    font-family: Helveticas, sans-serif;
    font-weight: bold;
  }

  @font-face {
    font-family: 'Momc';
    src: url(/IntegralCF-Regular.otf);
    font-style: bold;
  }

  #rightline {
    vertical-align: middle;
  }


  #font-footer {
    font-family: Helveticas;
    font-weight: bold;
  }

  .an {
    font-family: Bebas Neue;
    font-weight: bold;
    font-size: x-large;
    font-style: italic;
  }


  #qotd {
    font-family: Momc;
  }

  #toprf {
    font-family: Inter;
    font-weight: normal;
  }

  nav {
    font-family: Mon;
    font-weight: bold;
    font-size: large;
  }

  body {
    margin: 0;
    font-family: Helvetica;
  }

  hr {
    height: 0;
    color: inherit;
  }

  abbr[title] {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
  }

  b,
  strong {
    font-weight: bolder;
  }




  /* #################################################################################### */




  code,
  kbd,
  pre,
  samp {
    font-family: ui-monospace, SFMono-Regular, Consolas, Liberation Mono, Menlo,
      monospace;
    font-size: 1em;
  }

  small {
    font-size: 80%;
  }

  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }

  sub {
    bottom: -0.25em;
  }

  sup {
    top: -0.5em;
  }

  table {
    text-indent: 0;
    border-color: inherit;
  }

  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
  }

  button,
  select {
    text-transform: none;
  }

  [type="button"],
  [type="reset"],
  [type="submit"],
  button {
    -webkit-appearance: button;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  legend {
    padding: 0;
  }

  progress {
    vertical-align: baseline;
  }

  ::-webkit-inner-spin-button,
  ::-webkit-outer-spin-button {
    height: auto;
  }

  [type="search"] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
  }

  ::-webkit-search-decoration {
    -webkit-appearance: none;
  }

  ::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
  }

  summary {
    display: list-item;
  }

  blockquote,
  dd,
  dl,
  figure,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  hr,
  p,
  pre {
    margin: 0;
  }

  button {
    background-color: transparent;
    background-image: none;
  }

  fieldset,
  ol,
  ul {
    margin: 0;
    padding: 0;
  }

  ol,
  ul {
    list-style: none;
  }

  html {
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
    line-height: 1.5;
  }

  body {
    font-family: inherit;
    line-height: inherit;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
    border: 0 solid;
  }

  hr {
    border-top-width: 1px;
  }

  img {
    border-style: solid;
  }

  textarea {
    resize: vertical;
  }

  input::-moz-placeholder,
  textarea::-moz-placeholder {
    color: #7b7b85;
  }

  input:-ms-input-placeholder,
  textarea:-ms-input-placeholder {
    color: #7b7b85;
  }

  input::placeholder,
  textarea::placeholder {
    color: #7b7b85;
  }

  [role="button"],
  button {
    cursor: pointer;
  }

  table {
    border-collapse: collapse;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: inherit;
    font-weight: inherit;
  }

  a {
    color: inherit;
    text-decoration: inherit;
  }

  button,
  input,
  optgroup,
  select,
  textarea {
    padding: 0;
    line-height: inherit;
    color: inherit;
  }

  code,
  kbd,
  pre,
  samp {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
      Liberation Mono, Courier New, monospace;
  }

  audio,
  canvas,
  embed,
  iframe,
  img,
  object,
  svg,
  video {
    display: block;
    vertical-align: middle;
  }

  img,
  video {
    max-width: 100%;
    height: auto;
  }

  [hidden] {
    display: none;
  }

  *,
  :after,
  :before {
    --tw-border-opacity: 1;
    border-color: rgba(203, 203, 209, var(--tw-border-opacity));
  }

  [multiple],
  [type="date"],
  [type="email"],
  [type="month"],
  [type="number"],
  [type="search"],
  [type="text"],
  [type="time"],
  [type="url"],
  [type="week"],
  select,
  textarea {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6e6b75;
    border-width: 1px;
    border-radius: 0;
    padding: 0.5rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 transparent;
  }

  [multiple]:focus,
  [type="date"]:focus,
  [type="email"]:focus,
  [type="month"]:focus,
  [type="number"]:focus,
  [type="search"]:focus,
  [type="text"]:focus,
  [type="time"]:focus,
  [type="url"]:focus,
  [type="week"]:focus,
  select:focus,
  textarea:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow);
    border-color: #2563eb;
  }

  input::-moz-placeholder,
  textarea::-moz-placeholder {
    color: #6e6b75;
    opacity: 1;
  }

  input:-ms-input-placeholder,
  textarea:-ms-input-placeholder {
    color: #6e6b75;
    opacity: 1;
  }

  input::placeholder,
  textarea::placeholder {
    color: #6e6b75; //Inner Placeholder
    opacity: 1;
  }

  ::-webkit-datetime-edit-fields-wrapper {
    padding: 0;
  }

  ::-webkit-date-and-time-value {
    min-height: 1.5em;
  }

  select {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236e6b75' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
  }

  [multiple] {
    background-image: none;
    background-position: 0 0;
    background-repeat: unset;
    background-size: auto auto;
    background-size: initial;
    padding-right: 0.75rem;
    -webkit-print-color-adjust: unset;
    color-adjust: unset;
  }

  [type="file"] {
    background: unset;
    border-color: inherit;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-size: unset;
    line-height: inherit;
  }

  [type="file"]:focus {
    outline: 1px auto -webkit-focus-ring-color;
  }

  * {
    scrollbar-color: auto;
    scrollbar-width: auto;
  }

  .container {
    width: 100%;
  }

  @media (min-width: 375px) {
    .container {
      max-width: 375px;
    }
  }

  @media (min-width: 640px) {
    .container {
      max-width: 640px;
    }
  }

  @media (min-width: 768px) {
    .container {
      max-width: 768px;
    }
  }

  @media (min-width: 1024px) {
    .container {
      max-width: 1024px;
    }
  }

  @media (min-width: 1280px) {
    .container {
      max-width: 1280px;
    }
  }

  @media (min-width: 1536px) {
    .container {
      max-width: 1536px;
    }
  }

  .text-content ol,
  .text-content p,
  .text-content ul {
    margin-bottom: 1.5rem;
    font-size: 1.125rem;
  }

  .text-content h2 {
    margin-top: 2.5rem;
    font-size: 1.875rem;
  }

  .text-content h2,
  .text-content h3 {
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
    font-weight: 600;
  }

  .text-content h3 {
    margin-top: 2rem;
    font-size: 1.5rem;
  }

  .text-content h4 {
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
    font-size: 1.125rem;
    font-weight: 600;
  }

  .text-content ul {
    list-style-type: disc;
    padding-left: 2rem;
  }

  .text-content li {
    margin-bottom: 0.75rem;
  }

  .text-content ol {
    list-style-type: decimal;
    padding-left: 2rem;
  }

  .text-content strong {
    font-weight: 600;
  }

  .text-content a {
    font-weight: 500;
    --tw-text-opacity: 1;
    color: rgba(82, 237, 255, var(--tw-text-opacity));
    text-decoration: underline;
  }

  .text-content a:hover {
    text-decoration: none;
  }

  .text-content blockquote {
    background: linear-gradient(180deg, #24323a, #19181d),
      linear-gradient(180deg, #1e1d23, #1e1d23);
    margin: 2rem 0;
    border-radius: 1.5rem;
    padding: 3rem 2.5rem;
    text-align: center;
  }

  @media (min-width: 768px) {
    .text-content blockquote {
      padding-left: 5rem;
      padding-right: 5rem;
    }
  }

  @media (min-width: 1024px) {
    .text-content blockquote {
      margin-left: -5rem;
      margin-right: -5rem;
    }
  }

  @media (min-width: 1024px) {
    .text-content.contained-blockquote blockquote {
      margin-left: 0;
      margin-right: 0;
    }
  }

  .text-content blockquote:before {
    content: url("data:image/svg+xml;charset=utf-8,%3Csvg width='38' height='24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20.786 14.636c0 5.599 2.993 9.364 8.206 9.364 4.151 0 7.047-2.607 7.047-6.372 0-4.054-3.765-7.144-8.495-5.696.869-4.247 4.827-6.854 10.137-6.66V.057c-9.654-.772-16.895 6.275-16.895 14.578zm-20.467 0C.32 20.235 3.312 24 8.525 24c4.152 0 7.144-2.607 7.144-6.372 0-4.054-3.861-7.144-8.495-5.696.772-4.247 4.73-6.854 10.137-6.66V.057C7.56-.714.319 6.333.319 14.636z' fill='%2352EDFF'/%3E%3C/svg%3E");
    --tw-text-opacity: 1;
    color: rgba(82, 237, 255, var(--tw-text-opacity));
  }

  .text-content blockquote p:first-child {
    margin-top: 3.5rem;
  }

  .text-content blockquote p {
    margin-top: 1.75rem;
    margin-bottom: 0;
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
    font-size: 1.5rem;
    font-weight: 600;
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .text-content blockquote p:only-child {
    margin-bottom: 2rem;
  }

  .text-content blockquote p:not(:first-child) strong {
    display: block;
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
    font-size: 1.25rem;
    font-weight: 600;
    --tw-text-opacity: 1;
    color: rgba(82, 237, 255, var(--tw-text-opacity));
  }

  .inline-form-input-wrapper {
    position: relative;
    display: flex;
    width: 100%;
    flex-direction: column;
    align-items: stretch;
    justify-content: space-between;
    border-radius: 0.75rem;
    border-width: 2px;
    --tw-border-opacity: 1;
    border-color: rgba(255, 255, 255, var(--tw-border-opacity));
    --tw-border-opacity: 0.1;
    --tw-bg-opacity: 1;
    background-color: rgba(25, 24, 29, var(--tw-bg-opacity));
    padding: 0.25rem;
  }

  @media (min-width: 640px) {
    .inline-form-input-wrapper {
      flex-direction: row;
    }
  }

  .focus-within\:inline-form-input-wrapper-gradient:focus-within {
    border: 2px solid transparent;
    background-image: linear-gradient(#ffffff, #ffffff),
      linear-gradient(90deg, #ff4d6d, #7209b7, #3a0ca3, #4361ee, #b7f9f9);
    background-origin: border-box;
    background-clip: padding-box, border-box;
  }

  .pointer-events-none {
    pointer-events: none;
  }

  .pointer-events-auto {
    pointer-events: auto;
  }

  .disabled\:pointer-events-none:disabled {
    pointer-events: none;
  }

  .visible {
    visibility: visible;
  }

  .invisible {
    visibility: hidden;
  }

  .fixed {
    position: fixed;
  }

  .absolute {
    position: absolute;
  }

  .relative {
    position: relative;
  }

  .sticky {
    position: -webkit-sticky;
    position: sticky;
  }

  .inset-0 {
    top: 0;
    bottom: 0;
  }

  .inset-0,
  .inset-x-0 {
    right: 0;
    left: 0;
  }

  .inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .top-0 {
    top: 0;
  }

  .top-2 {
    top: 0.5rem;
  }

  .top-3 {
    top: 0.75rem;
  }

  .top-4 {
    top: 1rem;
  }

  .top-6 {
    top: 1.5rem;
  }

  .top-8 {
    top: 2rem;
  }

  .top-10 {
    top: 2.5rem;
  }

  .top-14 {
    top: 3.5rem;
  }

  .top-16 {
    top: 4rem;
  }

  .top-32 {
    top: 8rem;
  }

  .top-36 {
    top: 9rem;
  }

  .top-44 {
    top: 11rem;
  }

  .top-52 {
    top: 13rem;
  }

  .top-60 {
    top: 15rem;
  }

  .top-0\.5 {
    top: 0.125rem;
  }

  .top-2\.5 {
    top: 0.625rem;
  }

  .top-1\/2 {
    top: 50%;
  }

  .top-1\/4 {
    top: 25%;
  }

  .top-full {
    top: 100%;
  }

  .right-0 {
    right: 0;
  }

  .right-6 {
    right: 1.5rem;
  }

  .right-8 {
    right: 2rem;
  }

  .right-0\.5 {
    right: 0.125rem;
  }

  .right-1\/2 {
    right: 50%;
  }

  .right-1\/4 {
    right: 25%;
  }

  .right-3\/4 {
    right: 75%;
  }

  .right-full {
    right: 100%;
  }

  .bottom-0 {
    bottom: 0;
  }

  .bottom-4 {
    bottom: 1rem;
  }

  .bottom-6 {
    bottom: 1.5rem;
  }

  .bottom-12 {
    bottom: 3rem;
  }

  .bottom-96 {
    bottom: 24rem;
  }

  .left-0 {
    left: 0;
  }

  .left-8 {
    left: 2rem;
  }

  .left-1\/2 {
    left: 50%;
  }

  .left-1\/4 {
    left: 25%;
  }

  .left-3\/4 {
    left: 75%;
  }

  .left-full {
    left: 100%;
  }

  .isolate {
    isolation: isolate;
  }

  .z-0 {
    z-index: 0;
  }

  .z-10 {
    z-index: 10;
  }

  .z-20 {
    z-index: 20;
  }

  .z-40 {
    z-index: 40;
  }

  .z-50 {
    z-index: 50;
  }

  .order-1 {
    order: 1;
  }

  .order-2 {
    order: 2;
  }

  .col-span-1 {
    grid-column: span 1 / span 1;
  }

  .col-span-4 {
    grid-column: span 4 / span 4;
  }

  .col-span-5 {
    grid-column: span 5 / span 5;
  }

  .col-span-7 {
    grid-column: span 7 / span 7;
  }

  .col-span-12 {
    grid-column: span 12 / span 12;
  }

  .row-span-2 {
    grid-row: span 2 / span 2;
  }

  .row-start-2 {
    grid-row-start: 2;
  }

  .float-right {
    float: right;
  }

  .m-auto {
    margin: auto;
  }

  .mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }

  .my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .my-9 {
    margin-top: 2.25rem;
    margin-bottom: 2.25rem;
  }

  .my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-40 {
    margin-top: 10rem;
    margin-bottom: 10rem;
  }

  .-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .mt-1 {
    margin-top: 0.25rem;
  }

  .mt-2 {
    margin-top: 0.5rem;
  }

  .mt-3 {
    margin-top: 0.75rem;
  }

  .mt-4 {
    margin-top: 1rem;
  }

  .mt-5 {
    margin-top: 1.25rem;
  }

  .mt-6 {
    margin-top: 1.5rem;
  }

  .mt-8 {
    margin-top: 2rem;
  }

  .mt-9 {
    margin-top: 2.25rem;
  }

  .mt-10 {
    margin-top: 2.5rem;
  }

  .mt-12 {
    margin-top: 3rem;
  }

  .mt-14 {
    margin-top: 3.5rem;
  }

  .mt-16 {
    margin-top: 4rem;
  }

  .mt-18 {
    margin-top: 4.5rem;
  }

  .mt-20 {
    margin-top: 5rem;
  }

  .mt-22 {
    margin-top: 5.5rem;
  }

  .mt-24 {
    margin-top: 6rem;
  }

  .mt-48 {
    margin-top: 12rem;
  }

  .mt-auto {
    margin-top: auto;
  }

  .-mt-0 {
    margin-top: 0;
  }

  .-mt-4 {
    margin-top: -1rem;
  }

  .-mt-5 {
    margin-top: -1.25rem;
  }

  .-mt-0\.5 {
    margin-top: -0.125rem;
  }

  .mr-0 {
    margin-right: 0;
  }

  .mr-1 {
    margin-right: 0.25rem;
  }

  .mr-2 {
    margin-right: 0.5rem;
  }

  .mr-3 {
    margin-right: 0.75rem;
  }

  .mr-4 {
    margin-right: 1rem;
  }

  .mr-8 {
    margin-right: 2rem;
  }

  .mr-0\.5 {
    margin-right: 0.125rem;
  }

  .mr-2\.5 {
    margin-right: 0.625rem;
  }

  .-mr-1 {
    margin-right: -0.25rem;
  }

  .-mr-2 {
    margin-right: -0.5rem;
  }

  .-mr-4 {
    margin-right: -1rem;
  }

  .-mr-5 {
    margin-right: -1.25rem;
  }

  .mb-1 {
    margin-bottom: 0.25rem;
  }

  .mb-2 {
    margin-bottom: 0.5rem;
  }

  .mb-3 {
    margin-bottom: 0.75rem;
  }

  .mb-4 {
    margin-bottom: 1rem;
  }

  .mb-5 {
    margin-bottom: 1.25rem;
  }

  .mb-6 {
    margin-bottom: 1.5rem;
  }

  .mb-8 {
    margin-bottom: 2rem;
  }

  .mb-10 {
    margin-bottom: 2.5rem;
  }

  .mb-12 {
    margin-bottom: 3rem;
  }

  .mb-14 {
    margin-bottom: 3.5rem;
  }

  .mb-16 {
    margin-bottom: 4rem;
  }

  .mb-18 {
    margin-bottom: 4.5rem;
  }

  .mb-20 {
    margin-bottom: 5rem;
  }

  .mb-30 {
    margin-bottom: 7.5rem;
  }

  .mb-32 {
    margin-bottom: 8rem;
  }

  .-mb-1 {
    margin-bottom: -0.25rem;
  }

  .ml-1 {
    margin-left: 0.25rem;
  }

  .ml-2 {
    margin-left: 0.5rem;
  }

  .ml-5 {
    margin-left: 1.25rem;
  }

  .ml-auto {
    margin-left: auto;
  }

  .ml-1\.5 {
    margin-left: 0.375rem;
  }

  .-ml-1 {
    margin-left: -0.25rem;
  }

  .-ml-5 {
    margin-left: -1.25rem;
  }

  .block {
    display: block;
  }

  .inline-block {
    display: inline-block;
  }

  .inline {
    display: inline;
  }

  .flex {
    display: flex;
  }

  .inline-flex {
    display: inline-flex;
  }

  .table {
    display: table;
  }

  .grid {
    display: grid;
  }

  .contents {
    display: contents;
  }

  .hidden {
    display: none;
  }

  .group:hover .group-hover\:flex {
    display: flex;
  }

  .h-1 {
    height: 0.25rem;
  }

  .h-2 {
    height: 0.5rem;
  }

  .h-3 {
    height: 0.75rem;
  }

  .h-4 {
    height: 1rem;
  }

  .h-5 {
    height: 1.25rem;
  }

  .h-6 {
    height: 1.5rem;
  }

  .h-7 {
    height: 1.75rem;
  }

  .h-8 {
    height: 2rem;
  }

  .h-9 {
    height: 2.25rem;
  }

  .h-10 {
    height: 2.5rem;
  }

  .h-12 {
    height: 3rem;
  }

  .h-14 {
    height: 3.5rem;
  }

  .h-16 {
    height: 4rem;
  }

  .h-17 {
    height: 4.25rem;
  }

  .h-18 {
    height: 4.5rem;
  }

  .h-20 {
    height: 5rem;
  }

  .h-24 {
    height: 6rem;
  }

  .h-30 {
    height: 7.5rem;
  }

  .h-32 {
    height: 8rem;
  }

  .h-40 {
    height: 10rem;
  }

  .h-48 {
    height: 12rem;
  }

  .h-80 {
    height: 20rem;
  }

  .h-96 {
    height: 24rem;
  }

  .h-1\.5 {
    height: 0.375rem;
  }

  .h-2\.5 {
    height: 0.625rem;
  }

  .h-3\/4 {
    height: 75%;
  }

  .h-full {
    height: 100%;
  }

  .h-screen {
    height: 100vh;
  }

  .max-h-8 {
    max-height: 2rem;
  }

  .max-h-66 {
    max-height: 16.5rem;
  }

  .min-h-screen {
    min-height: 100vh;
  }

  .min-h-2\/3-screen {
    min-height: 66.666667vh;
  }

  .w-1 {
    width: 0.25rem;
  }

  .w-2 {
    width: 0.5rem;
  }

  .w-4 {
    width: 1rem;
  }

  .w-5 {
    width: 1.25rem;
  }

  .w-6 {
    width: 1.5rem;
  }

  .w-7 {
    width: 1.75rem;
  }

  .w-8 {
    width: 2rem;
  }

  .w-9 {
    width: 2.25rem;
  }

  .w-10 {
    width: 2.5rem;
  }

  .w-12 {
    width: 3rem;
  }

  .w-14 {
    width: 3.5rem;
  }

  .w-16 {
    width: 4rem;
  }

  .w-17 {
    width: 4.25rem;
  }

  .w-18 {
    width: 4.5rem;
  }

  .w-20 {
    width: 5rem;
  }

  .w-24 {
    width: 6rem;
  }

  .w-25 {
    width: 6.25rem;
  }

  .w-28 {
    width: 7rem;
  }

  .w-30 {
    width: 7.5rem;
  }

  .w-40 {
    width: 10rem;
  }

  .w-48 {
    width: 12rem;
  }

  .w-auto {
    width: auto;
  }

  .w-1\.5 {
    width: 0.375rem;
  }

  .w-2\.5 {
    width: 0.625rem;
  }

  .w-1\/2 {
    width: 50%;
  }

  .w-11\/12 {
    width: 91.666667%;
  }

  .w-full {
    width: 100%;
  }

  .w-screen {
    width: 100vw;
  }

  .w-max {
    width: -webkit-max-content;
    width: -moz-max-content;
    width: max-content;
  }

  .min-w-0 {
    min-width: 0;
  }

  .min-w-8 {
    min-width: 2rem;
  }

  .min-w-10 {
    min-width: 2.5rem;
  }

  .min-w-20 {
    min-width: 5rem;
  }

  .min-w-32 {
    min-width: 8rem;
  }

  .min-w-34 {
    min-width: 8.5rem;
  }

  .min-w-84 {
    min-width: 21rem;
  }

  .max-w-8 {
    max-width: 2rem;
  }

  .max-w-50 {
    max-width: 12.5rem;
  }

  .max-w-70 {
    max-width: 17.5rem;
  }

  .max-w-100 {
    max-width: 25rem;
  }

  .max-w-xs {
    max-width: 20rem;
  }

  .max-w-sm {
    max-width: 24rem;
  }

  .max-w-md {
    max-width: 28rem;
  }

  .max-w-lg {
    max-width: 32rem;
  }

  .max-w-xl {
    max-width: 36rem;
  }

  .max-w-2xl {
    max-width: 42rem;
  }

  .max-w-3xl {
    max-width: 48rem;
  }

  .max-w-4xl {
    max-width: 56rem;
  }

  .max-w-5xl {
    max-width: 64rem;
  }

  .max-w-6xl {
    max-width: 72rem;
  }

  .max-w-7xl {
    max-width: 80rem;
  }

  .max-w-full {
    max-width: 100%;
  }

  .flex-1 {
    flex: 1 1;
  }

  .flex-auto {
    flex: 1 1 auto;
  }

  .flex-none {
    flex: none;
  }

  .flex-shrink-0 {
    flex-shrink: 0;
  }

  .flex-grow-0 {
    flex-grow: 0;
  }

  .flex-grow {
    flex-grow: 1;
  }

  .table-auto {
    table-layout: auto;
  }

  .transform {
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .transform,
  .transform-gpu {
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
  }

  .transform-gpu {
    transform: translate3d(var(--tw-translate-x), var(--tw-translate-y), 0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .translate-x-2 {
    --tw-translate-x: 0.5rem;
  }

  .-translate-x-2 {
    --tw-translate-x: -0.5rem;
  }

  .-translate-x-1\/2 {
    --tw-translate-x: -50%;
  }

  .-translate-x-1\/4 {
    --tw-translate-x: -25%;
  }

  .-translate-y-2 {
    --tw-translate-y: -0.5rem;
  }

  .-translate-y-8 {
    --tw-translate-y: -2rem;
  }

  .-translate-y-2\.5 {
    --tw-translate-y: -0.625rem;
  }

  .-translate-y-1\/2 {
    --tw-translate-y: -50%;
  }

  .-translate-y-full {
    --tw-translate-y: -100%;
  }

  .group:hover .group-hover\:translate-x-1,
  .hover\:translate-x-1:hover {
    --tw-translate-x: 0.25rem;
  }

  .rotate-0 {
    --tw-rotate: 0deg;
  }

  .rotate-180 {
    --tw-rotate: 180deg;
  }

  .scale-95 {
    --tw-scale-x: 0.95;
    --tw-scale-y: 0.95;
  }

  .scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
  }

  .hover\:scale-105:hover {
    --tw-scale-x: 1.05;
    --tw-scale-y: 1.05;
  }

  @-webkit-keyframes spin {
    to {
      transform: rotate(1turn);
    }
  }

  @keyframes spin {
    to {
      transform: rotate(1turn);
    }
  }

  @-webkit-keyframes ping {

    75%,
    to {
      transform: scale(2);
      opacity: 0;
    }
  }

  @keyframes ping {

    75%,
    to {
      transform: scale(2);
      opacity: 0;
    }
  }

  @-webkit-keyframes pulse {
    50% {
      opacity: 0.5;
    }
  }

  @keyframes pulse {
    50% {
      opacity: 0.5;
    }
  }

  @-webkit-keyframes bounce {

    0%,
    to {
      transform: translateY(-25%);
      -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
      animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }

    50% {
      transform: none;
      -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
      animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
  }

  @keyframes bounce {

    0%,
    to {
      transform: translateY(-25%);
      -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
      animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }

    50% {
      transform: none;
      -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
      animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
  }

  @-webkit-keyframes flicker {

    0%,
    19.999%,
    22%,
    62.999%,
    64%,
    64.999%,
    70%,
    to {
      opacity: 0.99;
    }

    20%,
    21.999%,
    63%,
    63.999%,
    65%,
    69.999% {
      opacity: 0.4;
    }
  }

  @keyframes flicker {

    0%,
    19.999%,
    22%,
    62.999%,
    64%,
    64.999%,
    70%,
    to {
      opacity: 0.99;
    }

    20%,
    21.999%,
    63%,
    63.999%,
    65%,
    69.999% {
      opacity: 0.4;
    }
  }

  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
      transform: scale(0.8) translateY(4px);
    }

    to {
      opacity: 1;
      transform: scale(1) translateY(0);
    }
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: scale(0.8) translateY(4px);
    }

    to {
      opacity: 1;
      transform: scale(1) translateY(0);
    }
  }

  .animate-pulse {
    -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  }

  .animate-flicker-slow {
    -webkit-animation: flicker 5s linear infinite;
    animation: flicker 5s linear infinite;
  }

  .animate-flicker-fast {
    -webkit-animation: flicker 3s linear infinite;
    animation: flicker 3s linear infinite;
  }

  .animate-fade-in {
    -webkit-animation: fadeIn 1.5s ease-in-out 0s both;
    animation: fadeIn 1.5s ease-in-out 0s both;
  }

  .animate-fade-in-2 {
    -webkit-animation: fadeIn 1.5s ease-in-out 0.5s both;
    animation: fadeIn 1.5s ease-in-out 0.5s both;
  }

  .animate-fade-in-3 {
    -webkit-animation: fadeIn 1.5s ease-in-out 1s both;
    animation: fadeIn 1.5s ease-in-out 1s both;
  }

  .animate-fade-in-4 {
    -webkit-animation: fadeIn 1.5s ease-in-out 1.5s both;
    animation: fadeIn 1.5s ease-in-out 1.5s both;
  }

  .cursor-pointer {
    cursor: pointer;
  }

  .cursor-not-allowed,
  .disabled\:cursor-not-allowed:disabled {
    cursor: not-allowed;
  }

  .select-none {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .resize-none {
    resize: none;
  }

  .resize {
    resize: both;
  }

  .list-outside {
    list-style-position: outside;
  }

  .list-disc {
    list-style-type: disc;
  }

  .appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }

  .auto-cols-fr {
    grid-auto-columns: minmax(0, 1fr);
  }

  .grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
  }

  .grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .grid-rows-1 {
    grid-template-rows: repeat(1, minmax(0, 1fr));
  }

  .grid-rows-2 {
    grid-template-rows: repeat(2, minmax(0, 1fr));
  }

  .grid-rows-3 {
    grid-template-rows: repeat(3, minmax(0, 1fr));
  }

  .flex-row {
    flex-direction: row;
  }

  .flex-col {
    flex-direction: column;
  }

  .flex-wrap {
    flex-wrap: wrap;
  }

  .items-start {
    align-items: flex-start;
  }

  .items-end {
    align-items: flex-end;
  }

  .items-center {
    align-items: center;
  }

  .items-stretch {
    align-items: stretch;
  }

  .justify-start {
    justify-content: flex-start;
  }

  .justify-end {
    justify-content: flex-end;
  }

  .justify-center {
    justify-content: center;
  }

  .justify-between {
    justify-content: space-between;
  }

  .gap-0 {
    grid-gap: 0;
    gap: 0;
  }

  .gap-1 {
    grid-gap: 0.25rem;
    gap: 0.25rem;
  }

  .gap-2 {
    grid-gap: 0.5rem;
    gap: 0.5rem;
  }

  .gap-3 {
    grid-gap: 0.75rem;
    gap: 0.75rem;
  }

  .gap-4 {
    grid-gap: 1rem;
    gap: 1rem;
  }

  .gap-5 {
    grid-gap: 1.25rem;
    gap: 1.25rem;
  }

  .gap-6 {
    grid-gap: 1.5rem;
    gap: 1.5rem;
  }

  .gap-8 {
    grid-gap: 2rem;
    gap: 2rem;
  }

  .gap-10 {
    grid-gap: 2.5rem;
    gap: 2.5rem;
  }

  .gap-12 {
    grid-gap: 3rem;
    gap: 3rem;
  }

  .gap-16 {
    grid-gap: 4rem;
    gap: 4rem;
  }

  .gap-0\.5 {
    grid-gap: 0.125rem;
    gap: 0.125rem;
  }

  .gap-2\.5 {
    grid-gap: 0.625rem;
    gap: 0.625rem;
  }

  .gap-x-4 {
    grid-column-gap: 1rem;
    -moz-column-gap: 1rem;
    column-gap: 1rem;
  }

  .gap-x-5 {
    grid-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
  }

  .gap-x-6 {
    grid-column-gap: 1.5rem;
    -moz-column-gap: 1.5rem;
    column-gap: 1.5rem;
  }

  .gap-x-10 {
    grid-column-gap: 2.5rem;
    -moz-column-gap: 2.5rem;
    column-gap: 2.5rem;
  }

  .gap-y-2 {
    grid-row-gap: 0.5rem;
    row-gap: 0.5rem;
  }

  .gap-y-6 {
    grid-row-gap: 1.5rem;
    row-gap: 1.5rem;
  }

  .gap-y-8 {
    grid-row-gap: 2rem;
    row-gap: 2rem;
  }

  .space-x-1> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.25rem * var(--tw-space-x-reverse));
    margin-left: calc(0.25rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-x-2> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.5rem * var(--tw-space-x-reverse));
    margin-left: calc(0.5rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-x-3> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.75rem * var(--tw-space-x-reverse));
    margin-left: calc(0.75rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-x-4> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-x-6> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-x-2\.5> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.625rem * var(--tw-space-x-reverse));
    margin-left: calc(0.625rem * (1 - var(--tw-space-x-reverse)));
  }

  .-space-x-1> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(-0.25rem * var(--tw-space-x-reverse));
    margin-left: calc(-0.25rem * (1 - var(--tw-space-x-reverse)));
  }

  .space-y-1> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.25rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
  }

  .space-y-2> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.5rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
  }

  .space-y-3> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.75rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
  }

  .space-y-4> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
  }

  .space-y-5> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
  }

  .space-y-6> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
  }

  .space-y-8> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse));
  }

  .space-y-10> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2.5rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2.5rem * var(--tw-space-y-reverse));
  }

  .space-y-12> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(3rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(3rem * var(--tw-space-y-reverse));
  }

  .space-y-20> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(5rem * (1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(5rem * var(--tw-space-y-reverse));
  }

  .divide-y> :not([hidden])~ :not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * (1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
  }

  .divide-gray-800> :not([hidden])~ :not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgba(50, 48, 56, var(--tw-divide-opacity));
  }

  .self-start {
    align-self: flex-start;
  }

  .justify-self-start {
    justify-self: start;
  }

  .justify-self-end {
    justify-self: end;
  }

  .justify-self-stretch {
    justify-self: stretch;
  }

  .overflow-auto {
    overflow: auto;
  }

  .overflow-hidden {
    overflow: hidden;
  }

  .overflow-x-auto {
    overflow-x: auto;
  }

  .overflow-y-auto {
    overflow-y: auto;
  }

  .overflow-x-scroll {
    overflow-x: scroll;
  }

  .truncate {
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .truncate,
  .whitespace-nowrap {
    white-space: nowrap;
  }

  .rounded-sm {
    border-radius: 0.125rem;
  }

  .rounded {
    border-radius: 0.25rem;
  }

  .rounded-md {
    border-radius: 0.375rem;
  }

  .rounded-lg {
    border-radius: 0.5rem;
  }

  .rounded-xl {
    border-radius: 0.75rem;
  }

  .rounded-2xl {
    border-radius: 1rem;
  }

  .rounded-3xl {
    border-radius: 1.5rem;
  }

  .rounded-full {
    border-radius: 9999px;
  }

  .rounded-t-xl {
    border-top-left-radius: 0.75rem;
    border-top-right-radius: 0.75rem;
  }

  .rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }

  .rounded-b-xl {
    border-bottom-right-radius: 0.75rem;
    border-bottom-left-radius: 0.75rem;
  }

  .rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .first\:rounded-l-md:first-child {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
  }

  .last\:rounded-r-md:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
  }

  .rounded-tl-md {
    border-top-left-radius: 0.375rem;
  }

  .rounded-tr-md {
    border-top-right-radius: 0.375rem;
  }

  .rounded-br-md {
    border-bottom-right-radius: 0.375rem;
  }

  .border-0 {
    border-width: 0;
  }

  .border-2 {
    border-width: 2px;
  }

  .border-4 {
    border-width: 4px;
  }

  .border {
    border-width: 1px;
  }

  .border-t {
    border-top-width: 1px;
  }

  .border-b-2 {
    border-bottom-width: 2px;
  }

  .border-l {
    border-left-width: 1px;
  }

  .border-none {
    border-style: none;
  }

  .border-transparent {
    border-color: transparent;
  }

  .border-black {
    --tw-border-opacity: 1;
    border-color: rgba(25, 24, 29, var(--tw-border-opacity));
  }

  .border-white {
    --tw-border-opacity: 1;
    border-color: rgba(255, 255, 255, var(--tw-border-opacity));
  }

  .border-gray-600 {
    --tw-border-opacity: 1;
    border-color: rgba(92, 92, 102, var(--tw-border-opacity));
  }

  .border-gray-700 {
    --tw-border-opacity: 1;
    border-color: rgba(61, 61, 69, var(--tw-border-opacity));
  }

  .border-gray-800 {
    --tw-border-opacity: 1;
    border-color: rgba(50, 48, 56, var(--tw-border-opacity));
  }

  .border-gray-900 {
    --tw-border-opacity: 1;
    border-color: rgba(31, 30, 36, var(--tw-border-opacity));
  }

  .border-gray {
    --tw-border-opacity: 1;
    border-color: rgba(140, 139, 142, var(--tw-border-opacity));
  }

  .border-teal {
    --tw-border-opacity: 1;
    border-color: rgba(82, 237, 255, var(--tw-border-opacity));
  }

  .group:hover .group-hover\:border-purple {
    --tw-border-opacity: 1;
    border-color: rgba(114, 9, 183, var(--tw-border-opacity));
  }

  .focus\:border-red:focus {
    --tw-border-opacity: 1;
    border-color: rgba(247, 37, 133, var(--tw-border-opacity));
  }

  .focus\:border-teal:focus {
    --tw-border-opacity: 1;
    border-color: rgba(82, 237, 255, var(--tw-border-opacity));
  }

  .border-opacity-10 {
    --tw-border-opacity: 0.1;
  }

  .border-opacity-20 {
    --tw-border-opacity: 0.2;
  }

  .border-opacity-50 {
    --tw-border-opacity: 0.5;
  }

  .bg-transparent {
    background-color: transparent;
  }

  .bg-black {
    --tw-bg-opacity: 1;
    background-color: rgba(237, 242, 244, var(--tw-bg-opacity));
  }

  .bg-full-black {
    --tw-bg-opacity: 1;
    background-color: rgba(141, 153, 174, var(--tw-bg-opacity));
  }

  .bg-white {
    --tw-bg-opacity: 1;
    background-color: rgba(4, 4, 255, 4 (--tw-bg-opacity));
  }

  .bg-gray-300 {
    --tw-bg-opacity: 1;
    background-color: rgba(175, 173, 179, var(--tw-bg-opacity));
  }

  .bg-gray-600 {
    --tw-bg-opacity: 1;
    background-color: rgba(92, 92, 102, var(--tw-bg-opacity));
  }

  .bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(61, 61, 69, var(--tw-bg-opacity));
  }

  .bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgba(50, 48, 56, var(--tw-bg-opacity));
  }

  .bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgba(31, 30, 36, var(--tw-bg-opacity));
  }

  .bg-gray {
    --tw-bg-opacity: 1;
    background-color: rgba(140, 139, 142, var(--tw-bg-opacity));
  }

  .bg-purple {
    --tw-bg-opacity: 1;
    background-color: rgba(114, 9, 183, var(--tw-bg-opacity));
  }

  .bg-red {
    background-color: rgba(247, 37, 133, var(--tw-bg-opacity));
  }

  .bg-red,
  .bg-teal {
    --tw-bg-opacity: 1;
  }

  .bg-teal {
    background-color: rgba(239, 35, 60, var(--tw-bg-opacity));
  }

  .bg-blue-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(116, 143, 252, var(--tw-bg-opacity));
  }

  .bg-blue {
    --tw-bg-opacity: 1;
    background-color: rgba(67, 97, 238, var(--tw-bg-opacity));
  }

  .bg-lilac {
    --tw-bg-opacity: 1;
    background-color: rgba(204, 93, 232, var(--tw-bg-opacity));
  }

  .bg-green {
    --tw-bg-opacity: 1;
    background-color: rgba(32, 201, 151, var(--tw-bg-opacity));
  }

  .bg-yellow {
    --tw-bg-opacity: 1;
    background-color: rgba(216, 0, 50, var(--tw-bg-opacity));
  }

  .bg-orange {
    --tw-bg-opacity: 1;
    background-color: rgba(141, 153, 174, var(--tw-bg-opacity));
  }

  .bg-pink {
    --tw-bg-opacity: 1;
    background-color: rgba(240, 101, 149, var(--tw-bg-opacity));
  }

  .bg-twitter {
    --tw-bg-opacity: 1;
    background-color: rgba(85, 172, 238, var(--tw-bg-opacity));
  }

  .group:hover .group-hover\:bg-teal-500 {
    --tw-bg-opacity: 1;
    background-color: rgba(29, 228, 252, var(--tw-bg-opacity));
  }

  .hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(225, 225, 230, var(--tw-bg-opacity));
  }

  .hover\:bg-gray-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(92, 92, 102, var(--tw-bg-opacity));
  }

  .hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(61, 61, 69, var(--tw-bg-opacity));
  }

  .hover\:bg-gray-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(50, 48, 56, var(--tw-bg-opacity));
  }

  .hover\:bg-gray-900:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(31, 30, 36, var(--tw-bg-opacity));
  }

  .hover\:bg-red-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(226, 28, 119, var(--tw-bg-opacity));
  }

  .hover\:bg-red:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(247, 37, 133, var(--tw-bg-opacity));
  }

  .hover\:bg-teal-500:hover {
    --tw-bg-opacity: 0.8;
    background-color: rgba(239, 35, 60, var(--tw-bg-opacity));
  }

  .hover\:bg-teal:hover {
    --tw-bg-opacity: 0.8;
    background-color: rgba(239, 35, 60, var(--tw-bg-opacity));
  }

  .focus\:bg-gray-600:focus {
    --tw-bg-opacity: 1;
    background-color: rgba(92, 92, 102, var(--tw-bg-opacity));
  }

  .focus\:bg-gray-800:focus {
    --tw-bg-opacity: 1;
    background-color: rgba(50, 48, 56, var(--tw-bg-opacity));
  }

  .focus\:bg-red:focus {
    --tw-bg-opacity: 1;
    background-color: rgba(247, 37, 133, var(--tw-bg-opacity));
  }

  .focus\:bg-teal-500:focus {
    --tw-bg-opacity: 1;
    background-color: rgba(223, 231, 253, var(--tw-bg-opacity));
  }

  .focus\:bg-teal:focus {
    --tw-bg-opacity: 1;
    background-color: rgba(223, 231, 253, var(--tw-bg-opacity));
  }

  .bg-opacity-5 {
    --tw-bg-opacity: 0.05;
  }

  .bg-opacity-10 {
    --tw-bg-opacity: 0.1;
  }

  .bg-opacity-20 {
    --tw-bg-opacity: 0.2;
  }

  .bg-opacity-40 {
    --tw-bg-opacity: 0.4;
  }

  .bg-opacity-75 {
    --tw-bg-opacity: 0.75;
  }

  .bg-opacity-80 {
    --tw-bg-opacity: 0.8;
  }

  .group:hover .group-hover\:bg-opacity-50 {
    --tw-bg-opacity: 0.5;
  }

  .hover\:bg-opacity-10:hover {
    --tw-bg-opacity: 0.1;
  }

  .hover\:bg-opacity-20:hover {
    --tw-bg-opacity: 0.2;
  }

  .hover\:bg-opacity-50:hover {
    --tw-bg-opacity: 0.5;
  }

  .hover\:bg-opacity-80:hover {
    --tw-bg-opacity: 0.8;
  }

  .bg-none {
    background-image: none;
  }

  .bg-gradient-to-t {
    background-image: linear-gradient(0deg, var(--tw-gradient-stops));
  }

  .bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
  }

  .bg-gradient-to-b {
    background-image: linear-gradient(180deg, var(--tw-gradient-stops));
  }

  .from-black {
    --tw-gradient-from: #19181d;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(25, 24, 29, 0));
  }

  .from-white {
    --tw-gradient-from: #fff;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, hsla(0, 0%, 100%, 0));
  }

  .from-gray-600 {
    --tw-gradient-from: #5c5c66;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(92, 92, 102, 0));
  }

  .from-gray-900 {
    --tw-gradient-from: #1f1e24;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(31, 30, 36, 0));
  }

  .from-gray {
    --tw-gradient-from: #8c8b8e;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(140, 139, 142, 0));
  }

  .from-purple {
    --tw-gradient-from: #7209b7;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(114, 9, 183, 0));
  }

  .from-red {
    --tw-gradient-from: #ff4d6d;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(247, 37, 133, 0));
  }

  .from-blue {
    --tw-gradient-from: #4361ee;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(67, 97, 238, 0));
  }

  .from-green {
    --tw-gradient-from: #20c997;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(32, 201, 151, 0));
  }

  .from-yellow {
    --tw-gradient-from: #fcc419;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(252, 196, 25, 0));
  }

  .from-pink-600 {
    --tw-gradient-from: #ff4d6d;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(247, 37, 133, 0));
  }

  .from-pink {
    --tw-gradient-from: #ff4d6d;
    --tw-gradient-stops: var(--tw-gradient-from),
      var(--tw-gradient-to, rgba(240, 101, 149, 0));
  }

  .via-gray {
    --tw-gradient-stops: var(--tw-gradient-from), #8c8b8e,
      var(--tw-gradient-to, rgba(140, 139, 142, 0));
  }

  .via-purple {
    --tw-gradient-stops: var(--tw-gradient-from), #7209b7,
      var(--tw-gradient-to, rgba(114, 9, 183, 0));
  }

  .via-red {
    --tw-gradient-stops: var(--tw-gradient-from), #ff4d6d,
      var(--tw-gradient-to, rgba(247, 37, 133, 0));
  }

  .via-blue {
    --tw-gradient-stops: var(--tw-gradient-from), #4361ee,
      var(--tw-gradient-to, rgba(67, 97, 238, 0));
  }

  .via-lilac {
    --tw-gradient-stops: var(--tw-gradient-from), #cc5de8,
      var(--tw-gradient-to, rgba(204, 93, 232, 0));
  }

  .via-green {
    --tw-gradient-stops: var(--tw-gradient-from), #20c997,
      var(--tw-gradient-to, rgba(32, 201, 151, 0));
  }

  .via-yellow {
    --tw-gradient-stops: var(--tw-gradient-from), #fcc419,
      var(--tw-gradient-to, rgba(252, 196, 25, 0));
  }

  .via-orange {
    --tw-gradient-stops: var(--tw-gradient-from), #ff922b,
      var(--tw-gradient-to, rgba(255, 146, 43, 0));
  }

  .via-pink {
    --tw-gradient-stops: var(--tw-gradient-from), #ff4d6d,
      var(--tw-gradient-to, rgba(134, 216, 120, 0));
  }

  .to-black {
    --tw-gradient-to: #19181d;
  }

  .to-gray-300 {
    --tw-gradient-to: #afadb3;
  }

  .to-gray {
    --tw-gradient-to: #8c8b8e;
  }

  .to-purple-600 {
    --tw-gradient-to: #6a06ab;
  }

  .to-purple {
    --tw-gradient-to: #7209b7;
  }

  .to-red {
    --tw-gradient-to: #ff4d6d;
  }

  .to-teal {
    --tw-gradient-to: #52edff;
  }

  .to-blue {
    --tw-gradient-to: #4361ee;
  }

  .to-green {
    --tw-gradient-to: #20c997;
  }

  .to-yellow {
    --tw-gradient-to: #fcc419;
  }

  .to-pink {
    --tw-gradient-to: #ff4d6d;
  }

  .bg-cover {
    background-size: cover;
  }

  .bg-contain {
    background-size: contain;
  }

  .bg-local {
    background-attachment: local;
  }

  .bg-center {
    background-position: 50%;
  }

  .bg-no-repeat {
    background-repeat: no-repeat;
  }

  .fill-current {
    fill: currentColor;
  }

  .fill-gray-500 {
    fill: #6e6b75;
  }

  .fill-purple {
    fill: #7209b7;
  }

  .fill-red-500 {
    fill: #e21c77;
  }

  .fill-red {
    fill: #ff4d6d;
  }

  .fill-teal {
    fill: #52edff;
  }

  .fill-blue {
    fill: #4361ee;
  }

  .stroke-current {
    stroke: currentColor;
  }

  .stroke-black {
    stroke: #19181d;
  }

  .stroke-white {
    stroke: #fff;
  }

  .stroke-gray-700 {
    stroke: #3d3d45;
  }

  .stroke-gray-900 {
    stroke: #1f1e24;
  }

  .stroke-purple {
    stroke: #7209b7;
  }

  .stroke-red {
    stroke: #ff4d6d;
  }

  .stroke-teal {
    stroke: #52edff;
  }

  .stroke-blue {
    stroke: #4361ee;
  }

  .stroke-1 {
    stroke-width: 1;
  }

  .stroke-2 {
    stroke-width: 2;
  }

  .stroke-3 {
    stroke-width: 3;
  }

  .stroke-4 {
    stroke-width: 4;
  }

  .stroke-10 {
    stroke-width: 10;
  }


  .text-left {
    text-align: left;
  }

  .text-center {
    text-align: center;
  }

  .text-right {
    text-align: right;
  }

  .align-top {
    vertical-align: top;
  }

  .align-middle {
    vertical-align: middle;
  }

  .font-sans {
    font-family: General Sans, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
  }

  .font-display {
    font-family: Monument Extended, ui-sans-serif, system-ui, -apple-system,
      BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
      sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol,
      Noto Color Emoji;
  }

  .text-xs {
    font-size: 0.75rem;
  }

  .text-sm {
    font-size: 0.875rem;
  }

  .text-base {
    font-size: 1rem;
  }

  .text-lg {
    font-size: 1.125rem;
  }

  .text-xl {
    font-size: 1.25rem;
  }

  .text-2xl {
    font-size: 1.5rem;
  }

  .text-3xl {
    font-size: 1.875rem;
  }

  .text-4xl {
    font-size: 2.25rem;
  }

  .text-5xl {
    font-size: 3rem;
  }

  .font-normal {
    font-weight: 400;
  }

  .font-medium {
    font-weight: 500;
  }

  .font-semibold {
    font-weight: 600;
  }

  .font-bold {
    font-weight: 700;
  }

  .font-extrabold {
    font-weight: 800;
  }

  .font-black {
    font-weight: 900;
  }

  .uppercase {
    text-transform: uppercase;
  }

  .font-semibold-reminder {
    color: #ffffff;
    font-weight: lighter;
  }

  .tabular-nums {
    --tw-ordinal: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-slashed-zero: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-numeric-figure: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-numeric-spacing: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-numeric-fraction: var(--tw-empty,
        /*!*/
        /*!*/
      );
    font-feature-settings: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
    font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
    --tw-numeric-spacing: tabular-nums;
  }

  .leading-3 {
    line-height: 0.75rem;
  }

  .leading-4 {
    line-height: 1rem;
  }

  .leading-5 {
    line-height: 1.25rem;
  }

  .leading-none {
    line-height: 1;
  }

  .leading-tight {
    line-height: 1.25;
  }

  .leading-normal {
    line-height: 1.4;
  }

  .leading-relaxed {
    line-height: 1.625;
  }

  .leading-heading {
    line-height: 1.3;
  }

  .tracking-wide {
    letter-spacing: 0.025em;
  }

  .text-transparent {
    color: transparent;
  }

  .text-black {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .text-white {
    --tw-text-opacity: 1;
    color: rgba(45, 45, 66, var(--tw-text-opacity)); //Main Text
  }

  .text-gray-100 {
    --tw-text-opacity: 1;
    color: rgba(225, 225, 230, var(--tw-text-opacity));
  }

  .text-gray-200 {
    --tw-text-opacity: 1;
    color: rgba(203, 203, 209, var(--tw-text-opacity));
  }

  .text-gray-300 {
    --tw-text-opacity: 1;
    color: rgba(175, 173, 179, var(--tw-text-opacity));
  }

  .text-gray-400 {
    --tw-text-opacity: 1;
    color: rgba(123, 123, 133, var(--tw-text-opacity));
  }

  .text-gray-500 {
    --tw-text-opacity: 1;
    color: rgba(110, 107, 117, var(--tw-text-opacity));
  }

  .text-gray-600 {
    --tw-text-opacity: 1;
    color: rgba(92, 92, 102, var(--tw-text-opacity));
  }

  .text-gray-700 {
    --tw-text-opacity: 1;
    color: rgba(61, 61, 69, var(--tw-text-opacity));
  }

  .text-gray-900 {
    --tw-text-opacity: 1;
    color: rgba(31, 30, 36, var(--tw-text-opacity));
  }

  .text-gray {
    --tw-text-opacity: 1;
    color: rgba(140, 139, 142, var(--tw-text-opacity));
  }

  .text-purple {
    --tw-text-opacity: 1;
    color: rgba(114, 9, 183, var(--tw-text-opacity));
  }

  .text-red-600 {
    --tw-text-opacity: 1;
    color: rgba(255, 135, 135, var(--tw-text-opacity));
  }

  .text-red {
    --tw-text-opacity: 1;
    color: rgba(247, 37, 133, var(--tw-text-opacity));
  }

  .text-teal {
    --tw-text-opacity: 1;
    color: rgba(82, 237, 255, var(--tw-text-opacity));
  }

  .text-blue-100 {
    --tw-text-opacity: 1;
    color: rgba(116, 143, 252, var(--tw-text-opacity));
  }

  .text-blue {
    --tw-text-opacity: 1;
    color: rgba(67, 97, 238, var(--tw-text-opacity));
  }

  .text-lilac {
    --tw-text-opacity: 1;
    color: rgba(204, 93, 232, var(--tw-text-opacity));
  }

  .text-green-100 {
    --tw-text-opacity: 1;
    color: rgba(56, 217, 169, var(--tw-text-opacity));
  }

  .text-green {
    --tw-text-opacity: 1;
    color: rgba(32, 201, 151, var(--tw-text-opacity));
  }

  .text-yellow {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .text-orange {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .text-pink {
    --tw-text-opacity: 1;
    color: rgba(240, 101, 149, var(--tw-text-opacity));
  }

  .group:hover .group-hover\:text-gray-500 {
    --tw-text-opacity: 1;
    color: rgba(110, 107, 117, var(--tw-text-opacity));
  }

  .group:hover .group-hover\:text-gray-700 {
    --tw-text-opacity: 1;
    color: rgba(61, 61, 69, var(--tw-text-opacity));
  }

  .group:hover .group-hover\:text-gray {
    --tw-text-opacity: 1;
    color: rgba(140, 139, 142, var(--tw-text-opacity));
  }

  .group:hover .group-hover\:text-teal {
    --tw-text-opacity: 1;
    color: rgba(82, 237, 255, var(--tw-text-opacity));
  }

  .hover\:text-black:hover {
    --tw-text-opacity: 1;
    color: rgba(25, 24, 29, var(--tw-text-opacity));
  }

  .hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .hover\:text-red:hover {
    --tw-text-opacity: 1;
    color: rgba(247, 37, 133, var(--tw-text-opacity));
  }

  .hover\:text-instagram:hover {
    --tw-text-opacity: 1;
    color: rgba(239, 35, 60, var(--tw-text-opacity));
  }

  .hover\:text-youtube:hover {
    --tw-text-opacity: 1;
    color: rgba(239, 35, 60, var(--tw-text-opacity));
  }

  .hover\:text-twitter:hover {
    --tw-text-opacity: 1;
    color: rgba(2239, 35, 60, var(--tw-text-opacity));
  }

  .focus\:text-black:focus {
    --tw-text-opacity: 1;
    color: rgba(25, 24, 29, var(--tw-text-opacity));
  }

  .focus\:text-white:focus {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .focus\:text-red:focus {
    --tw-text-opacity: 1;
    color: rgba(247, 37, 133, var(--tw-text-opacity));
  }

  .text-opacity-50 {
    --tw-text-opacity: 0.5;
  }

  .text-opacity-80 {
    --tw-text-opacity: 0.8;
  }

  .text-opacity-100 {
    --tw-text-opacity: 1;
  }

  .group:hover .group-hover\:underline,
  .hover\:underline:hover,
  .underline {
    text-decoration: underline;
  }

  .active\:no-underline:active {
    text-decoration: none;
  }

  .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .placeholder-gray::-moz-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(140, 139, 142, var(--tw-placeholder-opacity));
  }

  .placeholder-gray:-ms-input-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(140, 139, 142, var(--tw-placeholder-opacity));
  }

  .placeholder-gray::placeholder {
    --tw-placeholder-opacity: 1;
    color: rgba(140, 139, 142, var(--tw-placeholder-opacity));
  }

  .opacity-0 {
    opacity: 0;
  }

  .opacity-5 {
    opacity: 0.05;
  }

  .opacity-10 {
    opacity: 0.1;
  }

  .opacity-20 {
    opacity: 0.2;
  }

  .opacity-25 {
    opacity: 0.25;
  }

  .opacity-30 {
    opacity: 0.3;
  }

  .opacity-40 {
    opacity: 0.4;
  }

  .opacity-50 {
    opacity: 0.5;
  }

  .opacity-60 {
    opacity: 0.6;
  }

  .opacity-70 {
    opacity: 0.7;
  }

  .opacity-80 {
    opacity: 0.8;
  }

  .opacity-90 {
    opacity: 0.9;
  }

  .group:hover .group-hover\:opacity-100,
  .opacity-100 {
    opacity: 1;
  }

  .hover\:opacity-80:hover {
    opacity: 0.8;
  }

  .hover\:opacity-100:hover {
    opacity: 1;
  }

  .disabled\:opacity-40:disabled {
    opacity: 0.4;
  }

  .disabled\:opacity-50:disabled {
    opacity: 0.5;
  }

  *,
  :after,
  :before {
    --tw-shadow: 0 0 transparent;
  }

  .shadow {
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .shadow,
  .shadow-md {
    box-shadow: 0 0 transparent, 0 0 transparent, var(--tw-shadow);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent),
      var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
  }

  .shadow-md {
    --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
      0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .shadow-lg,
  .shadow-xl {
    box-shadow: 0 0 transparent, 0 0 transparent, var(--tw-shadow);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent),
      var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
  }

  .shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
      0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    box-shadow: 0 0 transparent, 0 0 transparent, var(--tw-shadow);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent),
      var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
  }

  .focus\:outline-none:focus,
  .outline-none {
    outline: 2px solid transparent;
    outline-offset: 2px;
  }

  *,
  :after,
  :before {
    --tw-ring-inset: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(206, 225, 255, 0.5);
    --tw-ring-offset-shadow: 0 0 transparent;
    --tw-ring-shadow: 0 0 transparent;
  }

  .group:focus .group-focus\:ring,
  .ring {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  .focus-within\:ring-2:focus-within {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  .focus-within\:ring:focus-within {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  .focus\:ring-0:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width)) var(--tw-ring-color);
  }

  .focus\:ring-0:focus,
  .focus\:ring-1:focus {
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  .focus\:ring-1:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  }

  .focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  }

  .focus\:ring-2:focus,
  .focus\:ring:focus {
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  .focus-visible\:ring.focus-visible,
  .focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  }

  .focus-visible\:ring.focus-visible {
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      0 0 transparent;
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 transparent);
  }

  @supports (display: block) {
    .focus-visible\:ring:focus-visible {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
        0 0 transparent;
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
        var(--tw-shadow, 0 0 transparent);
    }
  }

  .ring-red {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(247, 37, 133, var(--tw-ring-opacity));
  }

  .group:focus .group-focus\:ring-teal {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(82, 237, 255, var(--tw-ring-opacity));
  }

  .focus-within\:ring-red:focus-within {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(247, 37, 133, var(--tw-ring-opacity));
  }

  .focus-within\:ring-teal:focus-within {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(82, 237, 255, var(--tw-ring-opacity));
  }

  .focus\:ring-gray-700:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(61, 61, 69, var(--tw-ring-opacity));
  }

  .focus\:ring-gray-900:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(31, 30, 36, var(--tw-ring-opacity));
  }

  .focus\:ring-red:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(247, 37, 133, var(--tw-ring-opacity));
  }

  .focus\:ring-teal:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(82, 237, 255, var(--tw-ring-opacity));
  }

  .focus-visible\:ring-white.focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(255, 255, 255, var(--tw-ring-opacity));
  }

  @supports (display: block) {
    .focus-visible\:ring-white:focus-visible {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgba(255, 255, 255, var(--tw-ring-opacity));
    }
  }

  .focus-visible\:ring-red.focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgba(247, 37, 133, var(--tw-ring-opacity));
  }

  @supports (display: block) {
    .focus-visible\:ring-red:focus-visible {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgba(247, 37, 133, var(--tw-ring-opacity));
    }
  }

  .group:focus .group-focus\:ring-opacity-50,
  .ring-opacity-50 {
    --tw-ring-opacity: 0.5;
  }

  .focus-within\:ring-opacity-50:focus-within {
    --tw-ring-opacity: 0.5;
  }

  .focus-visible\:ring-opacity-50.focus-visible,
  .focus\:ring-opacity-50:focus {
    --tw-ring-opacity: 0.5;
  }

  @supports (display: block) {
    .focus-visible\:ring-opacity-50:focus-visible {
      --tw-ring-opacity: 0.5;
    }
  }

  .focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px;
  }

  .focus\:ring-offset-black:focus {
    --tw-ring-offset-color: #19181d;
  }

  .focus\:ring-offset-gray-900:focus {
    --tw-ring-offset-color: #1f1e24;
  }

  .filter {
    --tw-blur: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-brightness: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-contrast: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-grayscale: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-hue-rotate: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-invert: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-saturate: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-sepia: var(--tw-empty,
        /*!*/
        /*!*/
      );
    --tw-drop-shadow: var(--tw-empty,
        /*!*/
        /*!*/
      );
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
  }

  .invert {
    --tw-invert: invert(100%);
  }

  .transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition {
    transition-property: background-color, border-color, color, fill, stroke,
      opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
    transition-property: background-color, border-color, color, fill, stroke,
      opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: background-color, border-color, color, fill, stroke,
      opacity, box-shadow, transform, filter, backdrop-filter,
      -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-colors {
    transition-property: background-color, border-color, color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-transform {
    transition-property: transform;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .duration-75 {
    transition-duration: 75ms;
  }

  .duration-200 {
    transition-duration: 0.2s;
  }

  .duration-300 {
    transition-duration: 0.3s;
  }

  .duration-500 {
    transition-duration: 0.5s;
  }

  .ease-in {
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
  }

  .ease-out {
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  }

  .ease-in-out {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  }

  .column {
    -moz-columns: auto 1;
    columns: 1;
  }

  .column,
  .column-2 {
    grid-column-gap: 2rem;
    -moz-column-gap: 2rem;
    column-gap: 2rem;
    -moz-column-fill: balance;
    column-fill: balance;
  }

  .column-2 {
    -moz-columns: auto 2;
    columns: 2;
  }

  .scrollbar-thin {
    --scrollbar-track: initial;
    --scrollbar-thumb: initial;
    scrollbar-color: var(--scrollbar-thumb) var(--scrollbar-track);
    overflow: overlay;
  }

  .scrollbar-thin::-webkit-scrollbar-track {
    background-color: var(--scrollbar-track);
  }

  .scrollbar-thin::-webkit-scrollbar-thumb {
    background-color: var(--scrollbar-thumb);
  }

  .scrollbar-thin {
    scrollbar-width: thin;
  }

  .scrollbar-thin::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }

  .scrollbar-thumb-rounded-full::-webkit-scrollbar-thumb,
  .scrollbar-track-rounded-full::-webkit-scrollbar-track {
    border-radius: 9999px;
  }

  .scrollbar-thumb-gray-500 {
    --scrollbar-thumb: #6e6b75 !important;
  }

  .scrollbar-track-gray-700 {
    --scrollbar-track: #3d3d45 !important;
  }

  .highlight {
    background-image: linear-gradient(90deg, #ff4d6d, #ff4d6d);
    background-position-y: 80%;
    background-size: 100% 8px;
    background-repeat: no-repeat;
  }

  @media (min-width: 640px) {
    .highlight {
      background-size: 100% 10px;
    }
  }

  .hover\:gradient-bottom-border:hover {
    background-image: linear-gradient(90deg,
        #ff4d6d,
        #7209b7,
        #6d07b0,
        #4361ee,
        #2a3031);
    background-repeat: no-repeat;
    background-size: 100% 3px;
    background-position: 0 bottom;
  }

  .custom-scrollbar::-webkit-scrollbar {
    height: 4px;
    width: 4px;
  }

  .custom-scrollbar::-webkit-scrollbar-track {
    border-radius: 9999px;
  }

  .custom-scrollbar::-webkit-scrollbar-thumb {
    border-radius: 9999px;
    --tw-bg-opacity: 1;
    background-color: rgba(92, 92, 102, var(--tw-bg-opacity));
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 100;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Mntserrat;
    font-weight: 200;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 200;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 200;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 200;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 400;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 100;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: Monument Extended;
    font-weight: 400;
    src: url(/MonumentExtended-Regular.otf) format("woff2");
  }

  @font-face {
    font-family: General Sans;
    src: url(/HelveticaNowDisplay-Bold.ttf) format("woff2-variations");
    font-weight: 100 900;
  }

  ::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgba(240, 101, 149, var(--tw-bg-opacity));
    --tw-text-opacity: 1;
    color: rgba(43, 45, 66, var(--tw-text-opacity));
  }

  ::selection {
    --tw-bg-opacity: 1;
    background-color: rgba(43, 45, 66, var(--tw-bg-opacity));
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  body.dragging,
  body.dragging * {
    cursor: -webkit-grabbing !important;
    cursor: grabbing !important;
  }

  @media (min-width: 375px) {
    .xs\:mr-2 {
      margin-right: 0.5rem;
    }

    .xs\:mb-0 {
      margin-bottom: 0;
    }

    .xs\:mb-6 {
      margin-bottom: 1.5rem;
    }

    .xs\:flex {
      display: flex;
    }

    .xs\:w-2\/5 {
      width: 40%;
    }

    .xs\:w-3\/5 {
      width: 60%;
    }

    .xs\:gap-6 {
      grid-gap: 1.5rem;
      gap: 1.5rem;
    }

    .xs\:p-6 {
      padding: 1.5rem;
    }

    .xs\:text-base {
      font-size: 1rem;
    }

    .xs\:text-lg {
      font-size: 1.125rem;
    }

    .xs\:text-2xl {
      font-size: 1.5rem;
    }

    .xs\:text-3xl {
      font-size: 1.875rem;
    }

    .xs\:text-5xl {
      font-size: 3rem;
    }
  }

  @media (min-width: 640px) {
    .sm\:static {
      position: static;
    }

    .sm\:bottom-12 {
      bottom: 3rem;
    }

    .sm\:left-1\/2 {
      left: 50%;
    }

    .sm\:left-1\/3 {
      left: 33.333333%;
    }

    .sm\:col-span-1 {
      grid-column: span 1 / span 1;
    }

    .sm\:col-span-4 {
      grid-column: span 4 / span 4;
    }

    .sm\:col-start-2 {
      grid-column-start: 2;
    }

    .sm\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }

    .sm\:my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }

    .sm\:mt-0 {
      margin-top: 0;
    }

    .sm\:mt-8 {
      margin-top: 2rem;
    }

    .sm\:mt-10 {
      margin-top: 2.5rem;
    }

    .sm\:mt-12 {
      margin-top: 3rem;
    }

    .sm\:mt-14 {
      margin-top: 3.5rem;
    }

    .sm\:mt-16 {
      margin-top: 4rem;
    }

    .sm\:-mt-24 {
      margin-top: -6rem;
    }

    .sm\:mb-0 {
      margin-bottom: 0;
    }

    .sm\:mb-6 {
      margin-bottom: 1.5rem;
    }

    .sm\:mb-8 {
      margin-bottom: 2rem;
    }

    .sm\:mb-10 {
      margin-bottom: 2.5rem;
    }

    .sm\:mb-16 {
      margin-bottom: 4rem;
    }

    .sm\:mb-24 {
      margin-bottom: 6rem;
    }

    .sm\:ml-0 {
      margin-left: 0;
    }

    .sm\:block {
      display: block;
    }

    .sm\:flex {
      display: flex;
    }

    .sm\:grid {
      display: grid;
    }

    .sm\:hidden {
      display: none;
    }

    .sm\:h-16 {
      height: 4rem;
    }

    .sm\:h-18 {
      height: 4.5rem;
    }

    .sm\:h-24 {
      height: 6rem;
    }

    .sm\:h-auto {
      height: auto;
    }

    .sm\:w-16 {
      width: 4rem;
    }

    .sm\:w-18 {
      width: 4.5rem;
    }

    .sm\:w-24 {
      width: 6rem;
    }

    .sm\:w-auto {
      width: auto;
    }

    .sm\:max-w-48 {
      max-width: 12rem;
    }

    .sm\:max-w-sm {
      max-width: 24rem;
    }

    .sm\:max-w-md {
      max-width: 28rem;
    }

    .sm\:max-w-lg {
      max-width: 32rem;
    }

    .sm\:max-w-xl {
      max-width: 36rem;
    }

    .sm\:max-w-2xl {
      max-width: 42rem;
    }

    .sm\:max-w-3xl {
      max-width: 48rem;
    }

    .sm\:max-w-4xl {
      max-width: 56rem;
    }

    .sm\:-translate-x-1\/2 {
      --tw-translate-x: -50%;
    }

    .sm\:grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .sm\:grid-cols-3 {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .sm\:grid-cols-4 {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .sm\:grid-rows-1 {
      grid-template-rows: repeat(1, minmax(0, 1fr));
    }

    .sm\:grid-rows-2 {
      grid-template-rows: repeat(2, minmax(0, 1fr));
    }

    .sm\:flex-row {
      flex-direction: row;
    }

    .sm\:flex-row-reverse {
      flex-direction: row-reverse;
    }

    .sm\:flex-col {
      flex-direction: column;
    }

    .sm\:items-start {
      align-items: flex-start;
    }

    .sm\:items-center {
      align-items: center;
    }

    .sm\:justify-start {
      justify-content: flex-start;
    }

    .sm\:justify-center {
      justify-content: center;
    }

    .sm\:justify-around {
      justify-content: space-around;
    }

    .sm\:gap-0 {
      grid-gap: 0;
      gap: 0;
    }

    .sm\:gap-6 {
      grid-gap: 1.5rem;
      gap: 1.5rem;
    }

    .sm\:space-x-4> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1rem * var(--tw-space-x-reverse));
      margin-left: calc(1rem * (1 - var(--tw-space-x-reverse)));
    }

    .sm\:space-x-5> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.25rem * var(--tw-space-x-reverse));
      margin-left: calc(1.25rem * (1 - var(--tw-space-x-reverse)));
    }

    .sm\:space-x-6> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.5rem * var(--tw-space-x-reverse));
      margin-left: calc(1.5rem * (1 - var(--tw-space-x-reverse)));
    }

    .sm\:space-x-8> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(2rem * var(--tw-space-x-reverse));
      margin-left: calc(2rem * (1 - var(--tw-space-x-reverse)));
    }

    .sm\:space-y-0> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0rem * var(--tw-space-y-reverse));
    }

    .sm\:space-y-2> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0.5rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
    }

    .sm\:space-y-16> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(4rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(4rem * var(--tw-space-y-reverse));
    }

    .sm\:space-x-reverse> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 1;
    }

    .sm\:bg-contain {
      background-size: contain;
    }

    .sm\:stroke-4 {
      stroke-width: 4;
    }

    .sm\:p-0 {
      padding: 0;
    }

    .sm\:p-4 {
      padding: 1rem;
    }

    .sm\:p-6 {
      padding: 1.5rem;
    }

    .sm\:p-8 {
      padding: 2rem;
    }

    .sm\:p-10 {
      padding: 2.5rem;
    }

    .sm\:p-12 {
      padding: 3rem;
    }

    .sm\:px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .sm\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .sm\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }

    .sm\:px-12 {
      padding-left: 3rem;
      padding-right: 3rem;
    }

    .sm\:py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .sm\:py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    .sm\:py-32 {
      padding-top: 8rem;
      padding-bottom: 8rem;
    }

    .sm\:pt-20 {
      padding-top: 5rem;
    }

    .sm\:pt-32 {
      padding-top: 8rem;
    }

    .sm\:pt-44 {
      padding-top: 11rem;
    }

    .sm\:pb-3 {
      padding-bottom: 0.75rem;
    }

    .sm\:pb-16 {
      padding-bottom: 4rem;
    }

    .sm\:pb-24 {
      padding-bottom: 6rem;
    }

    .sm\:pb-36 {
      padding-bottom: 9rem;
    }

    .sm\:pl-14 {
      padding-left: 3.5rem;
    }

    .sm\:text-left {
      text-align: left;
    }

    .sm\:text-right {
      text-align: right;
    }

    .sm\:text-base {
      font-size: 1rem;
    }

    .sm\:text-lg {
      font-size: 1.125rem;
    }

    .sm\:text-xl {
      font-size: 1.25rem;
    }

    .sm\:text-2xl {
      font-size: 1.5rem;
    }

    .sm\:text-3xl {
      font-size: 1.875rem;
    }

    .sm\:text-4xl {
      font-size: 2.25rem;
    }

    .sm\:text-5xl {
      font-size: 3rem;
    }

    .sm\:text-7xl {
      font-size: 4.5rem;
    }

    .sm\:leading-8 {
      line-height: 2rem;
    }

    .sm\:leading-tight {
      line-height: 1.25;
    }

    .sm\:opacity-100 {
      opacity: 1;
    }

    .sm\:column-2 {
      -moz-columns: auto 2;
      columns: 2;
    }

    .sm\:column-2,
    .sm\:column-4 {
      grid-column-gap: 2rem;
      -moz-column-gap: 2rem;
      column-gap: 2rem;
      -moz-column-fill: balance;
      column-fill: balance;
    }

    .sm\:column-4 {
      -moz-columns: auto 4;
      columns: 4;
    }

    .sm\:column-gap-4 {
      grid-column-gap: 1rem;
      -moz-column-gap: 1rem;
      column-gap: 1rem;
    }
  }

  @media (min-width: 768px) {
    .md\:col-span-1 {
      grid-column: span 1 / span 1;
    }

    .md\:mx-0 {
      margin-left: 0;
      margin-right: 0;
    }

    .md\:mt-0 {
      margin-top: 0;
    }

    .md\:mt-16 {
      margin-top: 4rem;
    }

    .md\:mb-8 {
      margin-bottom: 2rem;
    }

    .md\:ml-5 {
      margin-left: 1.25rem;
    }

    .md\:ml-8 {
      margin-left: 2rem;
    }

    .md\:ml-16 {
      margin-left: 4rem;
    }

    .md\:block {
      display: block;
    }

    .md\:flex {
      display: flex;
    }

    .md\:grid {
      display: grid;
    }

    .md\:hidden {
      display: none;
    }

    .md\:h-full {
      height: 100%;
    }

    .md\:w-1\/2 {
      width: 50%;
    }

    .md\:max-w-2xl {
      max-width: 42rem;
    }

    .md\:max-w-5xl {
      max-width: 64rem;
    }

    .md\:grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .md\:grid-cols-5 {
      grid-template-columns: repeat(5, minmax(0, 1fr));
    }

    .md\:grid-rows-2 {
      grid-template-rows: repeat(2, minmax(0, 1fr));
    }

    .md\:flex-row {
      flex-direction: row;
    }

    .md\:flex-col {
      flex-direction: column;
    }

    .md\:flex-nowrap {
      flex-wrap: nowrap;
    }

    .md\:items-end {
      align-items: flex-end;
    }

    .md\:justify-start {
      justify-content: flex-start;
    }

    .md\:justify-between {
      justify-content: space-between;
    }

    .md\:space-x-10> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(2.5rem * var(--tw-space-x-reverse));
      margin-left: calc(2.5rem * (1 - var(--tw-space-x-reverse)));
    }

    .md\:space-y-0> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0rem * var(--tw-space-y-reverse));
    }

    .md\:rounded-2xl {
      border-radius: 1rem;
    }

    .md\:p-10 {
      padding: 2.5rem;
    }

    .md\:p-12 {
      padding: 3rem;
    }

    .md\:p-16 {
      padding: 4rem;
    }

    .md\:px-10 {
      padding-left: 2.5rem;
      padding-right: 2.5rem;
    }

    .md\:px-12 {
      padding-left: 3rem;
      padding-right: 3rem;
    }

    .md\:px-14 {
      padding-left: 3.5rem;
      padding-right: 3.5rem;
    }

    .md\:px-32 {
      padding-left: 8rem;
      padding-right: 8rem;
    }

    .md\:pt-10 {
      padding-top: 2.5rem;
    }

    .md\:text-left {
      text-align: left;
    }

    .md\:text-right {
      text-align: right;
    }

    .md\:text-lg {
      font-size: 1.125rem;
    }

    .md\:text-xl {
      font-size: 1.25rem;
    }

    .md\:text-2xl {
      font-size: 1.5rem;
    }

    .md\:text-3xl {
      font-size: 1.875rem;
    }

    .md\:text-4xl {
      font-size: 2.25rem;
    }

    .md\:text-5xl {
      font-size: 3rem;
    }
  }

  @media (min-width: 1024px) {
    .lg\:col-span-5 {
      grid-column: span 5 / span 5;
    }

    .lg\:col-span-7 {
      grid-column: span 7 / span 7;
    }

    .lg\:mt-2 {
      margin-top: 0.5rem;
    }

    .lg\:mt-14 {
      margin-top: 3.5rem;
    }

    .lg\:mt-20 {
      margin-top: 5rem;
    }

    .lg\:mr-1 {
      margin-right: 0.25rem;
    }

    .lg\:mb-8 {
      margin-bottom: 2rem;
    }

    .lg\:ml-auto {
      margin-left: auto;
    }

    .lg\:block {
      display: block;
    }

    .lg\:flex {
      display: flex;
    }

    .lg\:grid {
      display: grid;
    }

    .lg\:hidden {
      display: none;
    }

    .lg\:h-20 {
      height: 5rem;
    }

    .lg\:min-h-17 {
      min-height: 4.25rem;
    }

    .lg\:w-20 {
      width: 5rem;
    }

    .lg\:w-1\/4 {
      width: 25%;
    }

    .lg\:max-w-xs {
      max-width: 20rem;
    }

    .lg\:max-w-xl {
      max-width: 36rem;
    }

    .lg\:max-w-3xl {
      max-width: 48rem;
    }

    .lg\:max-w-4xl {
      max-width: 56rem;
    }

    .lg\:max-w-6xl {
      max-width: 72rem;
    }

    .lg\:grid-flow-row {
      grid-auto-flow: row;
    }

    .lg\:grid-cols-3 {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .lg\:grid-cols-4 {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .lg\:grid-cols-12 {
      grid-template-columns: repeat(12, minmax(0, 1fr));
    }

    .lg\:grid-rows-1 {
      grid-template-rows: repeat(1, minmax(0, 1fr));
    }

    .lg\:grid-rows-3 {
      grid-template-rows: repeat(3, minmax(0, 1fr));
    }

    .lg\:flex-row {
      flex-direction: row;
    }

    .lg\:flex-col {
      flex-direction: column;
    }

    .lg\:items-center {
      align-items: center;
    }

    .lg\:gap-6 {
      grid-gap: 1.5rem;
      gap: 1.5rem;
    }

    .lg\:gap-10 {
      grid-gap: 2.5rem;
      gap: 2.5rem;
    }

    .lg\:space-x-6> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.5rem * var(--tw-space-x-reverse));
      margin-left: calc(1.5rem * (1 - var(--tw-space-x-reverse)));
    }

    .lg\:space-x-20> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(5rem * var(--tw-space-x-reverse));
      margin-left: calc(5rem * (1 - var(--tw-space-x-reverse)));
    }

    .lg\:space-y-0> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0rem * var(--tw-space-y-reverse));
    }

    .lg\:space-y-24> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(6rem * (1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(6rem * var(--tw-space-y-reverse));
    }

    .lg\:bg-gradient-to-b {
      background-image: linear-gradient(180deg, var(--tw-gradient-stops));
    }

    .lg\:p-20 {
      padding: 5rem;
    }

    .lg\:px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }

    .lg\:pt-10 {
      padding-top: 2.5rem;
    }

    .lg\:pt-20 {
      padding-top: 5rem;
    }

    .lg\:pb-12 {
      padding-bottom: 3rem;
    }

    .lg\:text-left {
      text-align: left;
    }

    .lg\:text-lg {
      font-size: 1.125rem;
    }

    .lg\:text-xl {
      font-size: 1.25rem;
    }

    .lg\:text-2xl {
      font-size: 1.5rem;
    }

    .lg\:text-3xl {
      font-size: 1.875rem;
    }

    .lg\:text-5xl {
      font-size: 3rem;
    }

    .lg\:leading-snug {
      line-height: 1.375;
    }

    .lg\:column-3 {
      grid-column-gap: 2rem;
      -moz-column-gap: 2rem;
      column-gap: 2rem;
      -moz-column-fill: balance;
      column-fill: balance;
      -moz-columns: auto 3;
      columns: 3;
    }

    .lg\:column-gap-4 {
      grid-column-gap: 1rem;
      -moz-column-gap: 1rem;
      column-gap: 1rem;
    }
  }

  @media (min-width: 1280px) {
    .xl\:top-4 {
      top: 1rem;
    }

    .xl\:w-14 {
      width: 3.5rem;
    }

    .xl\:w-24 {
      width: 6rem;
    }

    .xl\:px-0 {
      padding-left: 0;
      padding-right: 0;
    }
  }
</style>