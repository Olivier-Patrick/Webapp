@extends('layouts.auth')

@section('content')
<nav class="flex items-center justify-between flex-wrap bg-gray-500 p-40">
    <div class="flex items-center justify-between my-6">
         <div class="center max-w-md w-full "> 
            <div class="p-1 bg-blue-600 rounded-lg mt-4">
                    <h3 class="text-center text-3xl">
                        Se connecter 
                    </h3>

                <div class="my-10 mt-2">
                    <form class="bg-white shadow-md rounded px-6 pt-4 pb-6 mb-2" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="mb-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="flex items-center justify-between mb-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="flex-col mt-2"> 
                            <a class="py-2 px-10 w-full bg-red-600 text-white font-blod text-lg rounded-lg hover:bg-red-400" href="{{route('register')}}"> S'enregistrer</a>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
    <hr>
    <footer>
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
    </footer>

@endsection
