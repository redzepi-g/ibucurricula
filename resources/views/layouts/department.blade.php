<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}" />

    <!-- utility css -->
    <link rel="stylesheet" href="{{asset('css/utility.css')}}" />

    <!-- main style -->
    <link rel="stylesheet" href="{{asset('css/departmentStyle.css')}}" />

    <title>Study Curricula - Department</title>
    
  </head>
  <body>


    <div class="container-fluid">
        @yield('maincontent')
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('customscripts')
    
  </body>
</html>