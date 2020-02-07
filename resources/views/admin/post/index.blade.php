@extends('template_backend.home')
@section('sub-judul','Annonces')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
   @endif

    <a href="{{route('post.create')}}" class='btn btn-info btn-sm'>Ajouter une annonce</a>
    <br><br>

    <table class="table table-striped table-hover table-sm  table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Titre de l'annonce</th>
                <th>Catégorie</th>
                <th>Tags</th>
                <th>Utilisateur</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $result=>$hasil)
            <tr>
                <td>{{ $result + $post ->firstitem() }}</td>
                <td>{{$hasil->Titre}}</td>
                <td>{{$hasil->category->name}}</td>
                <td>@foreach ($hasil->tags as $tag)
                    <ul>
                        <h6><span class="badge badge-info">{{$tag->name}}</span></h6>
                    </ul>
                    @endforeach
                </td>
                <td>{{$hasil->user->name}}</td>
                <td>{{$hasil->active}}</td>
                <td><a href="#" class="btn btn-dark" ><i class="fas fa-eye "></i> <span></span></a></td>
                <td>
                     <form action="{{route('post.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{route('post.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <button type="submit" href="" class="btn btn-danger btn-sm">Supprimer</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $post->links() }}

@endsection