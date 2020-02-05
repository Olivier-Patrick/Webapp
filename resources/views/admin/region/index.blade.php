@extends('template_backend.home')
@section('sub-judul','Région')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
   @endif

    <a href="{{route('region.create')}}" class='btn btn-info btn-sm'>Ajouter une région</a>
    <br><br>

    <table class="table table-striped table-hover table-sm  table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom de région</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($region as $result=>$hasil)
            <tr>
                <td>{{ $result + $region ->firstitem() }}</td>
                <td>{{$hasil->name}}</td>
                <td>
                    

                     <form action="{{route('region.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{route('region.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <button type="submit" href="" class="btn btn-danger btn-sm">Supprimer</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $region->links() }}

@endsection