@extends('template.template')

@section('content')

<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">name</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($rols as $rol)
    <tr>
  
      <td> {{$rol->id}} </td>
      <td>{{$rol->name}}</td>
      <td>
        <a href="#!" class="btn btn-primary btn-lg mb-1">
          <i class="fas fa-list-alt"></i>
        </a>
        <a href="{{asset('/rol/edit/'.$rol->id.'')}}" class="btn btn-secondary btn-lg mb-1">
          <i class="fas fa-edit"></i>
        </a>
        <a href="{{asset('/icfes/modulo/'.$rol->id.'/destroy')}}" class="btn btn-danger btn-lg mb-1"
          onclick="return confirm('Seguro que desea eliminar el registro?')">
          <i class="fas fa-times-circle"></i>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
