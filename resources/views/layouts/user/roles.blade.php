@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/users')}}">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">User Roles</li>
  </ol>
</nav>

<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/users/roles/add/'.$user->id.'')}}" class="btn btn-primary">
      Add Role To {{$user->name}}
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

      @foreach ($user->roles as $role)
        <tr>
          <td>{{$role->id}}</td>
          <td>{{$role->name}}</td>
          <td>
            <a href="{{asset('/users/roles/unassign/'.$user->id.'/'.$role->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove this role from '.$user->name.'?')">
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
