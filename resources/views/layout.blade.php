<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="max-w-[1440px] mx-auto flex flex-col h-svh">
    <x-header />

    @if (session('error'))
      <x-alert type="error" :message="session('error')" />
    @elseif (session('success'))
      <x-alert type="success" :message="session('success')" />
    @endif

    @yield('content')

    <x-footer />
  </div>
</body>

</html>
