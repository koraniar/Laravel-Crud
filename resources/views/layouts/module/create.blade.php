@extends('template.template')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{asset('/modules')}}">Modules</a></li>
      <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
  </nav>

<div class="card-body">
  <div class="card spur-card">
      <div class="card-header">
        <div class="spur-card-title">Create Module</div>
      </div>
      <br/>
      <div class="card-body ">
        <form action="{{asset('/modules/store')}}" class="form" method="POST">
            {{ csrf_field() }}
            @include('layouts.module.form')
        </form>
      </div>
  </div>
</div>
@endsection
