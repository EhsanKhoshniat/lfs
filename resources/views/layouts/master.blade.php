
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>

@include ('layouts.nav')

@if ($flash = session('message'))
@include ('layouts.flash-message')
@endif


  <div class="container">
      <div class="row">
            @yield ('content')
            @include('layouts.sidebar')
      </div>
  </div>


  @include ('layouts.footer')
  </body>
</html>
