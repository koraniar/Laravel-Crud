@extends('template.template')

@section('content')

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
    </tr>
  @endforeach
  </tbody>
</table>



@endsection
