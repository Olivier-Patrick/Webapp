@extends('template_backend.home')
@section('sub-judul','Modifier votre annonce')
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
<form method="POST" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
       <label>Catégories</label>
       <select class="form-control" name="category_id">
          <option value="" holder>Choisissez votre catégorie</option>
          @foreach($category as $result)
             <option value="{{$result->id}}"
             @if($result->id  == $post->category_id)
                selected
             @endif
                 >
               {{$result->name}}
             </option>
          @endforeach
       </select>
   </div>

   <div class="form-group">
        <label>Selectionnez votre tag</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}"
                @foreach($post->tags as $value)
                  @if($tag->id == $value->id)
                    selected
                  @endif
                @endforeach
                >{{$tag->name}}</option>
            @endforeach
        </select>
    </div>

   <div class="form-group">
       <label>Titre</label>
       <input type="text" class="form-control" name="Titre" value="{{$post->Titre}}">
   </div>
   <div class="form-group">
       <label>Prix</label>
       <input type="decimal" class="form-control" name="Price" value="{{$post->Price}}">
   </div>
   <div class="form-group">
       <label>Description</label>
       <textarea class="form-control"  name="Description">{{$post->Description}}</textarea>
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
       <label>Images de l'article</label>
       <input type="file" class="form-control" name="Photo">
   </div>
   <div class="form-group">
       <label>Adresse</label>
       <input type="text" class="form-control" name="Adresse" value="{{$post->Adresse}}">
   </div>
   <div class="form-group">
       <label>Numéro de téléphone</label>
       <input type="numeric" class="form-control" name="Phone" value="{{$post->Phone}}">
   </div>
   <div class="form-group">
       <label>Ville</label>
       <input type="text" class="form-control" name="Ville" value="{{$post->Ville}}">
   </div>


   <div class="form-group">
    <button class="btn btn-primary btn-block">Enregistrer la modification</button>
   </div>

</form>


@endsection