@extends('news.news-layout')
@section('post-body')
<body class="post-template-default single single-post postid-641 single-format-standard cookies-set cookies-accepted woocommerce-no-js tj-aerospace-continues-working-on-its-cnc-manufacturing-facility-in-vietnam">
    
    {{-- post-navbar --}}
    @include('static.navbar')
     {{-- post-header --}}
    @include('static.header')
     {{-- post-article --}}
    @include('post.post-article')
<script async src="https://static.addtoany.com/menu/page.js"></script>
{{-- post-footer --}}
@include('static.footer')
{{-- post-script --}}
@include('static.script')
</body>
@endsection