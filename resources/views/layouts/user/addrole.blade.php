@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/users')}}">Users</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/users/roles/'.$user->id.'')}}">User Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Role to {{$user->name}}</li>
  </ol>
</nav>

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
          <td>{{$role->id}}</td>
          <td>{{$role->name}}</td>
          <td>
            <a type="button" href="{{asset('/users/roles/assign/'.$user->id.'/'.$role->id.'')}}" class="btn btn-primary">
                Add Role
              </a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
