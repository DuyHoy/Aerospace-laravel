@extends('capabilities.capabilities-layout')
@section('capabilitiesbody')
<body class="page page-id-10 cookies-set cookies-accepted woocommerce-no-js capabilities">

    @include('static.navbar')
    
    @include('static.header')
     
    @include('capabilities.capabilities-article')   
    
    
    @include('static.footer')
    
    @include('static.script')
   

</body>
@endsection
