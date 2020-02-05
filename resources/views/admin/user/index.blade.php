@extends('template_backend.home')
@section('sub-judul','Utilisateur')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
   @endif

    <a href="{{route('user.create')}}" class='btn btn-info btn-sm'>Ajouter un utilisateur</a>
    <br><br>

    <table class="table table-striped table-hover table-sm  table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom utilisateur</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $result=>$hasil)
            <tr>
                <td>{{ $result + $user ->firstitem() }}</td>
                <td>{{$hasil->name}}</td>
                <td>{{$hasil->email}}</td>
                <td>
                    @if($hasil->type)
                       <span class="badge badge-info">Administrateur</span>
                       @else
                       <span class="badge badge-warning">Utilisateur</span>
                    @endif
                </td>
                <td>
                    

                     <form action="{{route('user.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{route('user.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <button type="submit" href="" class="btn btn-danger btn-sm">Supprimer</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $user->links() }}

@endsection