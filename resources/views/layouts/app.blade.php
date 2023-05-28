<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>About</title> -->
  {{-- <!-- <title>{{config('app.env', 'fallback') . ' - About'}}</title> --> --}}
  {{-- <title>{{config('app.name', 'fallback') . ' - About'}}</title> --}}
  <title>@yield('title')</title>
</head>

<header>
  <nav>
    <a href="/from_scratch/public">Home</a>
    <a href="/from_scratch/public/about">About</a>
    <a href="/from_scratch/public/services">Services</a>
  </nav>
</header>

<body>

  @yield('content')
  
</body>
</html>