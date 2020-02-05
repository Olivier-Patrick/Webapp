@extends('template_backend.home')
@section('sub-judul','Créer un compte')
@section('content')

@if(count($errors)>0)
 @foreach($errors->all() as $error)
 <div class="alert alert-danger" role="alert">
      {{ $error}}
 </div>
 @endforeach
@endif

@if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
@endif
<form method="POST" action="{{route('user.store')}}">
    @csrf

   <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" name="name">
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
   </div>
   <div class="form-group">
       <label>Type utilisateur</label>
       <select class="form-control" name="type">
           <option value="" holder>Ajouter le type d'utilisateur</option>
           <option value="1" holder>Adminstrateur</option>
           <option value="0" holder>Utilisateur</option>
       </select>
   </div>
   <div class="form-group">
     <label>Mot de passe</label>
     <input type="text" class="form-control" name="password">
   </div>

   <div class="form-group">
    <button class="btn btn-primary btn-block">Enregistrer le compte</button>
   </div>

</form>


@endsection