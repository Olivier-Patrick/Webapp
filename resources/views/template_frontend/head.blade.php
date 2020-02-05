<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Berenie</title>
        <link href="{{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js')}}"></script>
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>

        <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/modules/select2/dist/css/select2.min.css')}}">
        <script src="{{asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/stisla.js')}}"></script>



        <meta name="_token" content="{{csrf_token()}}" />
        <link rel = "stylesheet" href = "{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css')}}">
        <script src = "{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"> </script>
        <script src = "{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js')}}"> </script>

    </head>
    <body>

       <nav class="flex items-center justify-between flex-wrap bg-gray-400 p-4">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
               <a href="/">
                 <img style="width:80px; max-width:80px" src="{{asset('img/logo.png')}}" alt="">
               </a>
               <span class="font-semibold text-black tracking-tight">Toutes vos annonce gratuites</span>
            </div>
        </nav>
        <div class="flex items-center justify-between flex-wrap bg-orange-600 p-10 text-white">
          <h1> Publier une annonce</h1>
        </div>
        <div class="breadcrumb__container flex justify ml-4">
           <div class="breadcrumb content_container">
              <div class="breadcrumb_new">
                  <a href="/" itemprop="url" class="breadcrumb_item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">Toutes votre annonces gratuites ></span>
                    </a>
                  <a class="breadcrumb_item" title="" href="/post">Publier une annone</a>
                
              </div>
           </div>
       </div> 
        <br>
        <br>
     