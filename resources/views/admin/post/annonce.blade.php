@extends('template_frontend.home')
@section('content')
<br>
<br>
<br>

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

 @if (count($errors) > 0)
  <ul><li>{{ $error }}</li></ul>
 @endif
 <form method="POST" action="{{route('post.create_post')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
       <label>Catégories</label>
       <select class="form-control selectric" name="category_id">
          <option value="" holder>Choisissez votre catégorie</option>
          @foreach($category as $result)
             <option value="{{$result->id}}">{{$result->name}}</option>
          @endforeach
       </select>
   </div>
   <div class="form-group">
        <label>Choisissez votre tags</label>
        <select class="form-control select2" multiple="" name=tags[]>
            @foreach($tags as $tag )
              <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
   </div>

   <div class="form-group">
       <label>Titre</label>
       <input type="text" class="form-control" name="Titre">
   </div>
   <div class="form-group">
       <label>Prix</label>
       <input type="decimal" class="form-control" name="Price">
   </div>
   <div class="form-group">
       <label>Description</label>
       <textarea class="form-control"  name="Description"></textarea>
   </div>
   <div class="form-group">
       <label>Etat</label>
       <div>
          <input class="form-check-input" type="radio" name="Etat" value="option1" checked>
          <label class="form-check-label" for="Etat">Neuf</label>
       </div>
       <div>
          <input class="form-check-input" type="radio" name="Etat" value="option2" checked>
          <label class="form-check-label" for="Etat">Ancien</label>
       </div>
   </div>
  
   <div class="form-group">
        <input type="file" name="filename[]" multiple class="form-control">
   </div>

   <div class="form-group">
       <label>Adresse</label>
       <input type="text" class="form-control" name="Adresse">
   </div>
   <div class="form-group">
       <label>Numéro de téléphone</label>
       <input type="numeric" class="form-control" name="Phone">
   </div>
   <div class="form-group">
       <label>Ville</label>
       <input type="text" class="form-control" name="Ville" >
   </div>


   <div class="form-group">
    <button class="btn btn-primary btn-block">Enregistrer</button>
   </div>

 </form>
@endsection


