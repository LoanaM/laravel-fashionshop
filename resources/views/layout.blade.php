<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
  </head>
  <body>

    <header>
      <div class="searchbar">
        <div class="promotext">
          Sconti fino al 50% per un periodo limitato!
        </div>
        <div class="account">
          Login
          Carrello
          <input type="text" placeholder="Cerca" value="">
        </div>
      </div>
      <div class="navbar">
        <div class="logo">
          MBK
        </div>
        <div class="menu">
          <a href="/">HOME</a> WOMAN MAN ACCESSORIES
        </div>
      </div>
      <hr>
    </header>

    <main>
      @yield('main')
    </main>

  </body>
</html>
