@extends('news.news-layout')
@section('news-body')
   @include('static.navbar')
    
    @include('static.header')
     
    @include('news.news-show')   
    
    
    @include('static.footer')
    
    @include('static.script')
@endsection