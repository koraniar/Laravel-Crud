@extends('template.template')

@section('content')
<div class="user-dashboard">
    <h1>Crud</h1>
    <div class="container-fluid">
        <div class="row">
            <a type="button" href="{{asset('/modules')}}" class="btn btn-primary">
                Modules
            </a>
        </div>
        <div class="row">
            <a type="button" href="{{asset('/roles')}}" class="btn btn-primary">
                Roles
            </a>
        </div>
        <div class="row">
            <a type="button" href="{{asset('/businesses')}}" class="btn btn-primary">
                Businesses
            </a>
        </div>
        <div class="row">
            <a type="button" href="{{asset('/users')}}" class="btn btn-primary">
                Users
            </a>
        </div>
    </div>
</div>

@endsection
