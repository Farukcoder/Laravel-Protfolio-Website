<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/datatables-select.min.css')}}">
</head>
<body class="fix-header fix-sidebar">

@include('Layout.menu')

@yield('content')



</div>
</div>
<script type="text/javascript" src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/mdb.min.js')}}"></script>
<script src="{{asset('public/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/js/sidebarmenu.js')}}"></script>
<script src="{{asset('public/js/sticky-kit.min.js')}}"></script>
<script src="{{asset('public/js/custom.min-2.js')}}"></script>
<script src="{{asset('public/js/datatables.min.js')}}"></script>
<script src="{{asset('public/js/datatables-select.min.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src="{{asset('public/js/axios.min.js')}}"></script>

@yield('script')

</body>
</html>
