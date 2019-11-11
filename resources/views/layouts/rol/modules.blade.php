@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('/roles')}}">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Role Modules</li>
  </ol>
</nav>

<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/roles/modules/add/'.$role->id.'')}}" class="btn btn-primary">
      Add Module To {{$role->name}}
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

      @foreach ($role->modules as $module)
        <tr>
          <td>{{$module->id}}</td>
          <td>{{$module->name}}</td>
          <td>
            <a href="{{asset('/roles/modules/unassign/'.$role->id.'/'.$module->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove this module from '.$role->name.'?')">
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
