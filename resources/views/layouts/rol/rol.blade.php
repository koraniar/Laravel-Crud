@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Roles</li>
  </ol>
</nav>

<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/roles/create')}}" class="btn btn-primary">
      Add Role
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

      @foreach ($roles as $role)
        <tr>
          <td> {{$role->id}} </td>
          <td>{{$role->name}}</td>
          <td>
            <a href="#!" class="btn btn-primary btn-lg mb-1">
              <i class="fas fa-list-alt"></i>
            </a>
            <a href="{{asset('/roles/edit/'.$role->id.'')}}" class="btn btn-secondary btn-lg mb-1">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{asset('/roles/destroy/'.$role->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove the role?')">
              <i class="fas fa-times-circle"></i>
            </a>
            <a href="{{asset('/roles/modules/'.$role->id.'')}}" class="btn btn-secondary btn-lg mb-1">
              <i class="fas fa-edit"></i>
            </a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
