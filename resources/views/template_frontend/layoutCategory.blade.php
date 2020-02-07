<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Berenie</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css')}}">
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <meta name="_token" content="{{csrf_token()}}" />
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"> </script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"> </script>

    </head>
    <body>
          
        <nav style="position:fixed" class="flex items-center justify-between flex-wrap bg-gray-200 p-4">
            <div class="flex items-center flex-shrink-0 text-white mr-20" >
               <a href="/">
                 <img style="width:80px; max-width:80px" src="{{asset('img/logo.png')}}" alt="">
               </a>
               <span class="font-semibold text-black tracking-tight"><a href="/">Toutes vos annonce gratuites</a> </span>
            </div>

            <div class="mr-12"></div><div class="mr-12"></div><div class="mr-12"></div><div class="mr-12"></div><div class="mr-12"></div>
                        
            <div>
               <div class="text-lg flex"> 
                   <div>
                      <a href="/post" class="bg-red-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full mr-3">
                         Publier une annone
                      </a>
                    </div>
                    <div>
                      <a href="faq" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-green-500 mr-3">
                         Aide/FAQ
                      </a>
                    </div>                     
                    <div class="inline-block relative w-64 mr-3">
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
                    <div >
                       <a href="/login" class="block mt-4 mr-3 lg:inline-block lg:mt-0 text-black hover:text-green-500">
                         Se connecter/Creer mon compte 
                       </a>
                    </div>
                </div>
            </div>    
        </nav>
       <br>
       <br>
       <br>
        <div>
            <div class="bg-cover bg-center " style="background-image: url(http://www.mobot.org/MOBOT/research/vegmad/images/637_028l.gif)" class="header">
               <nav class="shadow-md rounded px-8 pt-6 pb-8 mb-4 p-15 items-center"  >
                  <br>
                  <form class="flex justify-center">
                    <input class="mr-3 italic" class="form-control mr-sm-2 " type="search" placeholder="Que cherchez vous ?" aria-label="Search" style="width: 400px", style="height:100px">
                    <input class="mr-3 italic" class="form-control mr-sm-2 " type="search" placeholder="A quel endroit ?" aria-label="Search" style="width: 400px", style="height:100px">
                    <input class="mr-3 italic" class="form-control mr-sm-2 " type="search" placeholder="+ 0 km" aria-label="Search" style="width: 250px", style="height:80px">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit"><i class="yif yif_16 flaticon_desktop flaticon-mail_view nomargin yif_white"></i>&nbsp;Chercher</button>
                 </form>
               </nav>
            </div> 
        </div>
        <div>
         @yield('content')
        </div>
        <footer class="bg-gray-300">
                  
          <hr>
          <table class="table-auto ml-10 " class="flex justify-between" style="width:100%">
             <thead>
               <tr>
                  <th class="px-4 py-2 "></th>
                  <th class="px-4 py-2 "></th>
                  <th class="px-4 py-2 "></th>
                  <th class="px-4 py-2 "></th>
               </tr>
             </thead>
             <tbody>
               <tr>
                   <td class="border:0 px-8 py-2">
                      <strong>Informations:</strong><br>
                      <a href="#"> <span>A propos de nous</span>
                      </a>
                      <br>
                      <a href="#"> <span>Conditions d’utilisation</span> 
                      </a>
                      <br>
                      <a href="#"> <span>Respect de la vie privée</span> 
                      </a>
                      <br>
                      <a href="/faq"><span>Aide/FAQ</span>
                      </a>
                      <br/> 
                      <br/> 
                      <br/>
                             
                   </td>
                   <td class="border:0 px-8 py-2">
                       <strong>Fonctionalités:</strong><br>
                       <a href="#"> <span>Faites la promotion de votre annonce!</span> 
                       </a>
                       <br>
                       <a href="#"> <span>Compte Premium</span> 
                       </a>
                       <br>
                       <a href="#"> <span>Pages Berenie</span>
                       </a>
                       <br>
                       <a href="#"> <span>App: iPhone</span> 
                       </a>
                       <a href="#"> <span>Page mobile</span> 
                       </a>
                       <br>
                       <a href="#"> <span>Devenir partenaire</span>
                       </a>
                       <br>
                       <a href="#"> <span>Votre pub sur Berenie</span> 
                       </a>                
                  </td>
                  <td class="border:0 px-8 py-2">
                       <strong>Service:</strong><br>
                       <a href="#"> <span>Conseils de Sécurité</span> 
                       </a>
                       <br>
                       <a href="#"> <span>Contact & Feedback</span> 
                       </a>
                       <br>
                       <a href="#"><span>Faire connaître Berenie</span>
                       </a>
                       <br/> 
                       <br/> 
                       <br/>
                       <br/> 
                  </td>
                  <td class="border:0 px-8 py-2">
                  <strong>Restez en contact:</strong><br>
                       <a href="#"> <span>Facebook</span> 
                       </a>
                       <br>
                       <a href="#"> <span>Tweter</span> 
                       </a>
                       <br>
                       <a href="#"><span>Pinterest</span>
                       </a>
                       <br/> 
                       <br/> 
                       <br/>
                       <br/>
                                          
                  </td>
                 </tr>
             </tbody>
          </table>
           
           <div class="ml-4">
             <ul>
                <li>Copyright © 2006-2019 Berenie™</li>
             </ul>
           </div>     
        </footer>
    
    </body>
</html>