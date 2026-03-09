@props([
    'title' => 'App Tienda'
])

<!DOCTYPE html>
<html lang="en" data-theme="dracula" class="overscroll-none">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>
<body class="min-h-screen flex flex-col">

    <header>
      <div class="navbar bg-base-300 shadow-sm">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul
              tabindex="-1"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
              <li><a href="/">Inicio</a></li>
              <li>
                <a>Ver</a>
                <ul class="p-2">
                  @isset($menuExtra)
                    {{ $menuExtra }}
                  @endisset
                </ul>
              </li>
            </ul>
          </div>
          <div class="flex items-center">
              <a href="/" class="btn btn-ghost text-xl flex items-center gap-1 px-2">
                  <span>TiendaStar</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#2a1bf3" class="icon-tabler-star">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                  </svg>
              </a>
          </div>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a href="/">Inicio</a></li>
            <li>
              <details>
                <summary>Ver</summary>
                <ul class="p-2 bg-base-100 w-40 z-1">
                  @isset($menuExtra)
                    {{ $menuExtra }}
                  @endisset
                </ul>
              </details>
            </li>
          </ul>
        </div>
        <div class="navbar-end">
          <a class="btn">Registrarse</a>
        </div>
      </div>
    </header>
    
    <main {{ $attributes->merge(['class' => 'container-table']) }}>
        {{ $slot }}
    </main>

    <footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4 mt-auto shadow-sm">
      <aside>
        <p>2026 - TiendaStar</p>
      </aside>
    </footer>
</body>
</html>