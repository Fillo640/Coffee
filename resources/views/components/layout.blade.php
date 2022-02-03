<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Coffeeidea</title>
    {{-- asset css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <x-navbar />

    
    {{$slot}}
    
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/13bb6e0f14.js" crossorigin="anonymous"></script>
    {{-- assett javascript      --}}
    <script src="{{asset('js/app.js')}}"></script>
   
  </body>
</html>