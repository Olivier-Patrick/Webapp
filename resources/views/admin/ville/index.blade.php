@extends('template_backend.home')
@section('sub-judul','Villes')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
   @endif

    <a href="{{route('ville.create')}}" class='btn btn-info btn-sm'>Ajouter une ville</a>
    <br><br>

    <table class="table table-striped table-hover table-sm  table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom ville</th>
                <th>Nom région</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ville as $result=>$hasil)
            <tr>
                <td>{{ $result + $ville ->firstitem() }}</td>
                <td>{{$hasil->name}}</td>
                <td>{{$hasil->region->name}}</td>
                <td>
                     <form action="{{route('ville.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{route('ville.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <button type="submit" href="" class="btn btn-danger btn-sm">Supprimer</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $ville->links() }}

@endsection