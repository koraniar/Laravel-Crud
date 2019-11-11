@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/roles')}}">Roles</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/roles/modules/'.$role->id.'')}}">Role Modules</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Module to {{$role->name}}</li>
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

      @foreach ($modules as $module)
        <tr>
          <td>{{$module->id}}</td>
          <td>{{$module->name}}</td>
          <td>
            <a type="button" href="{{asset('/roles/modules/assign/'.$role->id.'/'.$module->id.'')}}" class="btn btn-primary">
                Add Module
              </a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
