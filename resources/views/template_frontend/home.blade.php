<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Berenie</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css')}}">
        
    </head>


    @include('template_frontend.pheader')

       <div class=" container"> 

          @yield('content')

       </div>

   @include('template_frontend.footer')
     