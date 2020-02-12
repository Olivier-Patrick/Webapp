@extends('layouts.default')
@section('header')
    <div class="bg-cover bg-center " style="background-image: url(http://www.mobot.org/MOBOT/research/vegmad/images/637_028l.gif)" class="header">
        <nav class="shadow-md rounded px-8 pt-6 pb-8 mb-4 p-15 items-center"  >
           <form class="flex justify-center">
               <input class="mr-3" class="form-control mr-sm-2" type="search" placeholder="Que cherchez vous ?" aria-label="Search" style="width: 400px", style="height:100px">
               <input class="mr-3" class="form-control mr-sm-2" type="search" placeholder="A quel endroit ?" aria-label="Search" style="width: 400px", style="height:100px">
               <input class="mr-3" class="form-control mr-sm-2" type="search" placeholder="+ 0 km" aria-label="Search" style="width: 250px", style="height:80px">
               <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit"><i class="yif yif_16 flaticon_desktop flaticon-mail_view nomargin yif_white"></i>&nbsp;Chercher</button>
            </form>
          <br>
          <ul class="flex justify-center">
                <li class="mr-2" >
                    <span class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-700 hover:bg-white-700 text-white">Populaire:</span>
                </li>
                <li class="mr-2">
                    <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Service clients</a>
                </li>  
                <li class="mr-2">
                    <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Maison</a>
                </li>             
                <li class="mr-2">
                  <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">production</a>
               </li>    
                <li class="mr-2">
                    <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Riad hotel</a>
                </li>
                <li class="mr-2">
                  <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Traiteur</a>
               </li>
               <li class="mr-2">
                    <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Hotesses</a>
                </li>
                <li class="mr-2">
                    <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Chambre en résidence</a>
                </li>
                <li class="mr-2">
                  <a class="inline-block border border-blue-500 rounded-full py-0.5 px-4 bg-blue-200 hover:bg-green-500 text-black" href="#">Administrateur réseau</a>
               </li>
          </ul>
          <br>
          
          <ul class="flex justify-center">
            
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Achat & Vente</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Cours</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="{{route('category.index1')}}" name="">Communauté</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Évènemment</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Services</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Emploi</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Immobilier</a>
            </li>
            <li class="mr-1">
                <a class=" inline-block border border-blue-500 rounded py-8 px-10 bg-gray-600 hover:bg-red-500 text-white" href="#" name="">Véhicules</a>
            </li>
            
          </ul>
         
       </nav>
    </div>   
@stop 

@section('content')
  <div class="ml-4">
  <h3>VEUILLEZ CHOISIR VOTRE ENDROIT</h3>
  </div>
  <table class="table-auto ml-10" class="flex justify-between" style="width:100%">
      <thead>
        <tr>
          <th class="px-4 py-2 flex">Endroits populaires:</th>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-8 py-2">
               <a href="#"> <strong>Adagir</strong>
               </a>
               <br>
               <a href="#"> <span>Berrechid</span> 
               </a>
               <br>
               <a href="#"> <span>Béni-Mellal</span> 
               </a>
               <br>
               <a href="#"><strong>Casablanca</strong>
               </a>                             
          </td>
          <td class="border px-8 py-2">
               <a href="#"> <span>El Jadida</span> 
               </a>
               <br>
               <a href="#"> <span>Fès</span> 
               </a>
               <br>
               <a href="#"> <span>Guelmim</span>
               </a>
               <br>
               <a href="#"> <span>Khouribga</span> 
               </a>               
          </td>
          <td class="border px-8 py-2">
               <a href="#"> <span>Khémisset</span> 
               </a>
               <br>
               <a href="#"> <span>Ksar el-Kébir</span> 
               </a>
               <br>
               <a href="#"><span>Kénitra</span>
               </a>
               <br>
               <a href="#"> <span>Larache</span> 
               </a>
          </td>
          <td class="border px-8 py-2">
               <a href="#"> <strong>Marrakech</strong>
               </a>
               <br>
               <a href="#"> <span>Meknès</span> 
               </a>
               <br>
               <a href="#"> <strong>Mohammédia</strong> 
               </a>
               <br>
               <a href="#"><span>Nador</span>
               </a>
               
          </td>
          <td class="border px-8 py-2">
               <a href="#"> <span>Oujda</span> 
               </a>
               <br>
               <a href="#"> <strong>Rabat</strong> 
               </a>
               <br>
               <a href="#"> <span>Safi</span>
               </a>
               <br>
               <a href="#"> <span>Salé</span> 
               </a>
               <br>
          </td>
          <td class="border px-8 py-2">
               
               <a href="#"> <span>Settat</span> 
               </a>
               <br>
               <a href="#"> <span>Tanger</span> 
               </a>
               <br>
               <a href="#"><span>Taza</span>
               </a>
               <br>
               <a href="#"> <span>Tétouan</span> 
               </a>
          </td>
        </tr>
      </tbody>
  </table>
  <br>
  <table class="table-auto ml-10" class="flex justify-between" style="width:100%">
      <thead>
        <tr>
          <th class="px-4 py-2 flex">Régions:</th>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td class="border px-8 py-2">
               @foreach($data1 as $region_recent)
               <a href="#"> <span>{{$region_recent->name}}</span>
               </a>
               <br> 
               @endforeach                          
          </td>
         
          
          <td class="border px-8 py-2">
              @foreach($data2 as $region_recent2)
              <a href="#"> <span>{{$region_recent2->name}}</span></a>
              <br>
              @endforeach        
          </td>
          
          
          <td class="border px-8 py-2">
               @foreach($data3 as $region_recent3)
               <a href="#"> <span>{{$region_recent3->name}}</span>
               </a>
               <br>
               @endforeach
          </td>
         
        </tr>
      </tbody>
  </table>
   <br>

  <table class="table-auto ml-10" class="flex justify-between" style="width:100%">
       <div class="ml-10">
          <h3><span class="container">  Berenie propose un service de petites annonces de particulier à particulier dans toute la Côte d’Ivoire. Vous pouvez déposer une petite annonce gratuitement et parcourir l’immense sélection sur Berenie&nbsp;! </span></h3>
        </div>
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-8 py-2">
              <span> Vous cherchez quelque chose&nbsp;?</span>
              <br/>
              <br>
                 Beaucoup de choses dans la vie fonctionnent mieux tout près de chez soi. Si vous êtes par exemple à la recherche d’une voiture d’occasion ou d’une baby-sitter, les offres dans votre quartier, dans votre ville ou votre région sont souvent la meilleure solution. C’est pourquoi Berenie vous propose des petites annonces tout près de chez vous, dans votre ville. Vous cherchez un nouveau job&nbsp;? Consultez nos offres d’emploi...Vous souhaitez acheter une voiture d’occasion &nbsp;? Regardez dans la catégorie véhicules...Ou bien cherchez-vous l’appartement de vos rêves &nbsp;? Consultez nos petites annonces immobilières… N’hésitez pas à parcourir les annonces dans les autres catégories telles que Achat et Vente, Rencontres ou encore Services. Vous y trouverez des offres auxquelles vous aurez du mal à résister&nbsp;!
              <br/> 
              <br>
              <br>          
          </td>
          <td class="border px-8 py-2">
              <span> Vous voulez passer une petite annonce&nbsp;?</span>
              <br/>
              <br>
                 Passer une petite annonce sur Berenie, c’est très facile &nbsp;! Cela fonctionne comme les annonces dans un journal local. L’avantage de Berenie est que votre annonce sera diffusée en ligne pendant 60 jours et touche donc un public beaucoup plus nombreux. De plus, vous pouvez télécharger des images, utiliser des codes HTML et intégrer un lien vers votre site Web si vous le souhaitez. Pour publier une petite annonce gratuite en ligne, choisissez simplement votre ville ou cliquez sur le lien ci-dessous.<br /><br />
            
              <div>
                 <a class="text-blue" href="/post"> Déposer une annonce maintenant&nbsp;!
                 </a>
              </div>             
          </td>
        </tr>
      </tbody>
  </table>
@stop 


@section('footer')
<hr>
<br>
<table class="table-auto ml-10" class="flex justify-between" style="width:100%">
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
                 <td class="border px-8 py-2">
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

                 </td>
                 <td class="border px-8 py-2">
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
                <td class="border px-8 py-2">
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
                </td>
                <td class="border px-8 py-2">
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
                </td>
               </tr>
           </tbody>
       </table>
         
         <div class="ml-4">
           <ul>
              <li>Copyright © 2006-2019 Berenie™</li>
           </ul>
         </div>
@stop