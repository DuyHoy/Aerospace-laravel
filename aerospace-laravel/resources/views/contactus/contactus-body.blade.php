@extends('contactus.contactus-layout')
@section('contactus-body')
<body class="page-template page-template-page-contacts page-template-page-contacts-php page page-id-8 cookies-set cookies-accepted woocommerce-no-js contact-us">

@include('static.navbar')
    
    @include('static.header')
     
    @include('contactus.contactus-article')   
    
    
    @include('static.footer')
    
    @include('static.script')

</body>
@endsection