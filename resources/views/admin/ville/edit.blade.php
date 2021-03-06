@extends('template_backend.home')
@section('sub-judul','Modifier votre ville')
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
<form method="POST" action="{{route('ville.update', $ville->id)}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
       <label>Nom de la ville</label>
       <input type="text" class="form-control" name="name" value="{{$ville->name}}">
   </div>

    <div class="form-group">
       <label>Région</label>
       <select class="form-control" name="region_id">
          <option value="" holder>Choisissez votre région</option>
          @foreach($region as $result)
             <option value="{{$result->id}}"
             @if($result->id  == $ville->region_id)
                selected
             @endif
                 >
               {{$result->name}}
             </option>
          @endforeach
       </select>
   </div>

   <div class="form-group">
    <button class="btn btn-primary btn-block">Enregistrer la modification</button>
   </div>

</form>


@endsection