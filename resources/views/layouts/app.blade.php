<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="{{Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')

  <title>{{env('APP_NAME')}} - @yield('title')</title>
</head>
<body>
  <header>
    @include('partials.navbar')
  </header>
  <main>
    <section class="main-content">
      <div class="container">
        <h1 class="m-0 py-5">@yield('title')</h1>
      </div>
      @yield('comics-list')
    </section>
  </main>
   @include('partials.footer')
</body>
</html>