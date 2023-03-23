<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
  @vite('resources/css/app.css')
</head>
<body>
  <a href="{{url('/crud')}}"> <h1 class="text-3xl font-bold text-center my-5">
    @yield('title')
  </h1>
  </a>
  <div class="px-4">
    @yield('content')
  </div>
</body>

</html>