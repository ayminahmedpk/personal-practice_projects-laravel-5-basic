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

@include('inc.navbar')
@include('inc.messages')

<body>

  @yield('content')
  
</body>
</html>