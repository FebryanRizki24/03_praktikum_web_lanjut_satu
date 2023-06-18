<!doctype html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas Web Febryan Fadlila ~ @yield('titlePage')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css">                                      Bootstrap style -->
    <!-- <link rel="stylesheet" href="../../css/templatemo-style.css">     -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/templatemo-style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="row">
       @include('layouts.header')
    </header>

    @include('layouts.sidebar')

    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('layouts.footer')
        </footer>
    </div>

    <!-- <script src="{{ url('js/jquery-1.11.3.min.js')}}"></script>             jQuery (https://jquery.com/download/) -->
    <!-- <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h  -->
    <!-- <script src="{{ url('js/bootstrap.min.js')}}"></script>                 Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>
