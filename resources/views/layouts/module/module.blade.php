@extends('template.template')

@section('content')

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

    </tr>
  @endforeach
  </tbody>
</table>



@endsection
