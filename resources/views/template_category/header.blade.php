

<body>
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
                <a href="{{route('post.create_post')}}" class="bg-red-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full mr-3">
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
            <div>
                <a href="/login" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-green-500">
                    Se connecter/Creer mon compte 
                </a>
            </div>
        </div>
    </div>    
 </nav>

 <div class="bg-cover bg-center " style="background-image: url(http://www.mobot.org/MOBOT/research/vegmad/images/637_028l.gif)" class="header">
    <br>
    <nav class="shadow-md rounded px-8 pt-6 pb-8 mb-4 p-15 items-center"  >
        <form class="flex justify-center">
             <input class="mr-3 italic" class="form-control mr-sm-2" type="search" placeholder="Que cherchez vous ?" aria-label="Search" style="width: 400px", style="height:100px">
             <input class="mr-3 italic" class="form-control mr-sm-2" type="search" placeholder="A quel endroit ?" aria-label="Search" style="width: 400px", style="height:100px">
             <input class="mr-3 italic" class="form-control mr-sm-2" type="search" placeholder="+ 0 km" aria-label="Search" style="width: 250px", style="height:80px">
             <button style="font-size:18px" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit"><i class="yif yif_16 flaticon_desktop flaticon-mail_view nomargin yif_white"></i>&nbsp;Chercher</button>
        </form>
        <br>
    </nav>
 </div>