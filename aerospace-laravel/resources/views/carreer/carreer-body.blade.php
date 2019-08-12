@extends('carreer.carreer-layout')
@section('carreer-body')
<body class="page-template page-template-page-careers page-template-page-careers-php page page-id-12 cookies-set cookies-accepted woocommerce-no-js careers">
@include('static.navbar')
    
    @include('static.header')
     
    @include('carreer.carreer-article')   
    
    
    @include('static.footer')
    
    @include('static.script')
</body>    
@endsection