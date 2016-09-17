<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage KTX | @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! url('public/assets/css/bootstrap.min.css')!!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! url('public/assets/css/metisMenu.min.css')!!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! url('public/assets/css/sb-admin-2.css') !!}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{!! url('public/assets/morris.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=" {!! url('public/assets/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link href=" {!! url('public/assets/css/app.css') !!}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('backend.includes.header')
        <div id="page-wrapper">
            <!-- Content here -->
            <h1 class="caption">@yield('caption')</h1>
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! url('public/assets/js/jquery-1.12.0.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! url('public/assets/js/bootstrap.min.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! url('public/assets/js/metisMenu.min.js') !!}"></script>

    <!-- Morris Charts JavaScript -
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

     Custom Theme JavaScript -->
    <script src="{!! url('public/assets/js/sb-admin-2.js') !!}"></script>
    <script src="{!! url('public/assets/js/app.js') !!}"></script>

</body>

</html>
