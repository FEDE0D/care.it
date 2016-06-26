<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Consultorios Online | Red de profesionales online</title>
        <!-- JQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <!-- Darkly Bootstrap Theme -->
        <!--<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" />-->
        <!-- Lumen Bootstrap Theme -->
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css" />
        <!--Animate.css-->
        <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
        <!--wow.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        
        <!--Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>   
        <!--Custom JS-->
        
    </head>
    <body>
        <div class="container-fluid">
            @include('parts.header')
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div><!--!container-fluid-->
        
        <!--bottom js-->
        <script> new WOW().init(); </script>
    </body>
</html>