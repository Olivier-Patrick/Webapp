<nav id="menuprincipal" class="navbar navbar-default navbar-fixed-top">
    <div class="flex items-center justify-center flex-wrap bg-gray-200 p-4">          
        <div class="navbar-header">           
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>            
        <div id="navbar" class="collapse navbar-collapse" >
            <ul class="nav navbar-nav">
                <li class="flex items-center flex-shrink-0 mr-2">                      
                  <a href="/" class="d-flex">
                    <img style="width:60px; max-width:60px" src="{{asset('img/logo.png')}}" alt="">
                  </a>
                </li>
                <li class="mr-12" ><a href="/" style="font-size:20px" class="font-semibold text-black-500 tracking-tight">Toutes vos annonce gratuites</a></li>
                <li class="mr-3"><a href="/post" style="font-size:18px" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Publier une annonce</a></li>
                <li class="mr-3"><a href="faq" style="font-size:18px" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Aide/FAQ</a></li>
                <li class="dropdown">
                    <a href="#" style="font-size:18px" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ma Jamula<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/majamula">Mes annonces</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Achats</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Deconnexion</a></li>
                    </ul>
                </li>
                <li><a href="/login" style="font-size:18px" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-green-500 hover:border-transparent rounded">Se connecter/Creer mon compte</a></li>
                <li class="dropdown mr-12">
                    <a href="#" style="font-size:18px" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pays<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Maroc</a></li>
                        <li><a href="#">Côte d'Ivoire</a></li>
                    </ul>
                </li>
            </ul>
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