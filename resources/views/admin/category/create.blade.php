@extends('template_backend.home')
@section('sub-judul','Ajouter une Catégorie')
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
<form method="POST" action="{{route('category.store')}}">
    @csrf

   <div class="form-group">
    <label>Catégorie</label>
    <input type="text" class="form-control" name="name">
   </div>

   <div class="form-group">
    <button class="btn btn-primary btn-block">Enregistrer</button>
   </div>

</form>


@endsection