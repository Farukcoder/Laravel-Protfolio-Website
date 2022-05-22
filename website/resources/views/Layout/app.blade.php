<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="google-site-verification" content="J2K-awrLm--LtTSkUGmFsRpFFTU0W1V5PqZTQp0b6pg" />
    <meta name="description" content="Rabbil Hasan is an Expert Web Developer in Bangladesh. Expert Mobile App Developer in Bangladesh.He is highly talented, experienced, professional and cooperative software engineer, working in programming and web world for more than 4 years. Moreover Rabbil Hasan has a skilled team for achieving his goal named “Team Rabbil”.Team Rabbil assure you a wide range of quality IT services. ">
    <meta name="keywords" content="Expert Web Developer in Bangladesh, Expert Mobile App Developer in Bangladesh, Android App Developer in Bangladesh">
    <meta name="author" content="Rabbil Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet" >
    <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet" >
    <link href="{{asset('public/css/owl.carousel.min.css')}}" rel="stylesheet" >
    <link href="{{asset('public/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">
</head>
<body>

@include('Layout.menu')

@yield('content')




<script type="text/javascript" src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/custom.js')}}js/custom.js"></script>
</body>
</html>
