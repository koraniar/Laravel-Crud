@extends('template.template')

@section('content')
<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/users/create')}}" class="btn btn-primary">
      Add User
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
          <th scope="col">email</th>
          <th scope="col">email verified at</th>
          <th scope="col">password</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->email_verified_at}}</td>
          <td>{{$user->password}}</td>
          <td>
            <a href="#!" class="btn btn-primary btn-lg mb-1">
              <i class="fas fa-list-alt"></i>
            </a>
            <a href="{{asset('/users/edit/'.$user->id.'')}}" class="btn btn-secondary btn-lg mb-1">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{asset('/users/destroy/'.$user->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove the user?')">
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
