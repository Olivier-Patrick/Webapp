@extends('template_backend.home')
@section('sub-judul','Catégorie')
@section('content')

   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
     {{Session('success')}}
   </div>
   @endif

    <a href="{{route('category.create')}}" class='btn btn-info btn-sm'>Ajouter une catégorie</a>
    <br><br>

    <table class="table table-striped table-hover table-sm  table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom de la catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $result=>$hasil)
            <tr>
                <td>{{ $result + $category ->firstitem() }}</td>
                <td>{{$hasil->name}}</td>
                <td>
                    

                     <form action="{{route('category.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{route('category.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <button type="submit" href="" class="btn btn-danger btn-sm">Supprimer</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $category->links() }}

@endsection