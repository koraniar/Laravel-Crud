@extends('template.template')

@section('content')
<div class="container-fluid">
  <div class="row">
    <a type="button" href="{{asset('/modules/create')}}" class="btn btn-primary">
      Add Module
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
          <th scope="col">route</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($modules as $module)
        <tr>
          <td>{{$module->id}}</td>
          <td>{{$module->name}}</td>
          <td>{{$module->route}}</td>
          <td>
            <a href="#!" class="btn btn-primary btn-lg mb-1">
              <i class="fas fa-list-alt"></i>
            </a>
            <a href="{{asset('/modules/edit/'.$module->id.'')}}" class="btn btn-secondary btn-lg mb-1">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{asset('/modules/destroy/'.$module->id.'')}}" class="btn btn-danger btn-lg mb-1"
              onclick="return confirm('Are you sure do you want to remove the module?')">
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
