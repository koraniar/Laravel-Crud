@extends('template.template')

@section('content')

<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">nit</th>
      <th scope="col">name</th>
      <th scope="col">city</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($businesses as $business)
    <tr>
  
      <td>{{$business->id}}</td>
      <td>{{$business->nit}}</td>
      <td>{{$business->name}}</td>
      <td>{{$business->ciudad}}</td>

    </tr>
  @endforeach
  </tbody>
</table>



@endsection
