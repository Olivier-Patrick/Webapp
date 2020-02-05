<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <title>Creer un menu de BereiPub</title>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="/css/app1.css">
      <link rel="stylesheet" href="css/app1.css">
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
     <head>
         <nav class="flex items-center justify-between flex-wrap bg-gray-200 p-4">
              <div class="flex items-center flex-shrink-0 text-white mr-6">
                 <a href="/">
                   <img style="width:80px; max-width:80px" src="{{asset('img/logo.png')}}" alt="">
                 </a>
                 <span class="font-semibold text-black tracking-tight">Toutes vos annonce gratuites</span>
              </div>
              <!-- <div class="block lg:hidden">
                 <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                   <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                 </button>
              </div> -->
              <div>
                 <div class="text-lg flex "> 
                      <div>
                        <a href="/post" class="bg-red-700 hover:bg-red-400 text-white font-bold py-1 px-3 rounded-full mr-3">
                           Publier une annone
                        </a>
                      </div>
                      <div>
                        <a href="faq" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-green-500 mr-2">
                           Aide/FAQ
                        </a>
                      </div>
                        
                      <div class="inline-block relative w-64 mr-2">
                         <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-6 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                           <option><a href="#"> Mon Berenie</a> </option>
                           <option><a href="#">Mon annonce</a> </option>
                           <option><a href="#">Message</a> </option>
                           <option><a href="#">Achats</a> </option>
                         </select>                     
                         <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                           <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                         </div>
                      </div>
                      <!-- <div>
                         <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-green-500">
                           Se connecter/Creer mon compte 
                         </a>
                      </div> -->
                  </div>
              </div>    
          </nav>
          <div class="bg-cover bg-center " style="background-color:#92B3D4" class="header">
              <nav class="shadow-md rounded px-8 pt-6 pb-8 mb-4 p-12 items-center"  >
                  <!-- <div class="flex justify-center">
                      <h1>Bonjour, comment pouvons-nous vous aider&nbsp;?</h1>
                  </div>
                  <br>
                  <form class="flex justify-center">
                      <input class="mr-3" class="form-control mr-sm-2" type="search" placeholder="Parcourez notre rubrique d’aide..." aria-label="Search" style="width: 400px", style="height:100px">
                      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit"><i class="yif yif_16 flaticon_desktop flaticon-mail_view nomargin yif_white"></i>&nbsp;Chercher</button>
                  </form> -->
              </nav>
          </div>   
      </head>
      <div>
      <div class="breadcrumb__container flex justify ml-4">
           <div class="breadcrumb content_container">
              <div class="breadcrumb_new">
                  <a href="/" itemprop="url" class="breadcrumb_item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">Toutes votre annonces gratuites ></span>
                    </a>
                  <a class="breadcrumb_item" title="" href="/login">Mon FariBoutik </a>
                
              </div>
           </div>
      </div>
      @yield('content')
      
   </body>
</html>

