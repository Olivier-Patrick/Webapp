<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Berenie</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css')}}">
        
    </head>
    <body>
     <head>
       <nav class="flex items-center justify-between flex-wrap bg-gray-400 p-4">
           <div class="flex items-center flex-shrink-0 text-white mr-6">
              <a href="/">
                <img style="width:80px; max-width:80px" src="{{asset('img/logo.png')}}" alt="">
              </a>
              <span class="font-semibold text-black tracking-tight">Toutes vos annonce gratuites</span>
           </div>
       </nav>
       <div class="flex items-center justify-between flex-wrap bg-blue-600 p-6 text-white">
         <span style="font-size: 40px"> Publier une annonce</span>
       </div>
     </head>
       <div>
       @yield('content')
       </div>
       <footer>
       @yield('footer')
       </footer>
    </body>
</html>
