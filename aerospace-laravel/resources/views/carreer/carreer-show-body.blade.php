@extends('carreer.carreer-layout')
@section('carreer-body')
<body class="job-template-default single single-job postid-865 cookies-set cookies-accepted woocommerce-no-js swiss-machinists">
@include('static.navbar')
    
    @include('static.header')
     @switch($id)
         @case(1)
         @include('carreer.carreer-show-article1')   
             @break
         @case(2)
         @include('carreer.carreer-show-article2')      
             @break
        @case(3)
         @include('carreer.carreer-show-article3')      
             @break  
        @case(4)
         @include('carreer.carreer-show-article4')      
             @break       
        @default
         @include('carreer.carreer-show-article5')      
             @break
        
             
     @endswitch
    
    
    
    
    @include('static.footer')
    
    @include('static.script')
</body>    
@endsection