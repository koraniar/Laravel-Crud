@extends('template.template')

@section('content')
<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/rols/create')}}" class="btn btn-primary">
      Add Rol
    </a>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
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
            <a href="{{asset('/rols/edit/'.$rol->id.'')}}" class="btn btn-secondary btn-lg mb-1">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{asset('/rols/destroy/'.$rol->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove the rol?')">
              <i class="fas fa-times-circle"></i>
            </a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
