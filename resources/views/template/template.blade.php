<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel-Crud</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/template.css')}}">

    @yield('style')
  </head>
  <body class="home">
    <div class="container-fluid display-table">
    <div class="row display-table-row">
        <nav>
          @include("template.menu.menu")
        </nav>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <div class="row">
                <header>
                    @include('template.header.header')
                </header>
            </div>
          @yield("content")
        </div>
    </div>

</div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/template.js"></script>
    <script type="text/javascript" src="{{asset('js/template.js')}}"></script>
  </body>
</html>
