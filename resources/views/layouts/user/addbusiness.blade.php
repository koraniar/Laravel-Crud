@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/users')}}">Users</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/users/businesses/'.$user->id.'')}}">User Businesses</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Business to {{$user->name}}</li>
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

      @foreach ($businesses as $business)
        <tr>
          <td>{{$business->id}}</td>
          <td>{{$business->name}}</td>
          <td>
            <a type="button" href="{{asset('/users/businesses/assign/'.$user->id.'/'.$business->id.'')}}" class="btn btn-primary">
                Add Business
              </a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
