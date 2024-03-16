@extends('frontend.master')

@section('content')
<!-- Start Book Table -->
@include('frontend.home.book')
<!-- End Book Table -->

<!-- Start Menu-->
@include('frontend.home.menu')
<!-- End  Menu -->

<!-- Start  Testimony -->
@include('frontend.home.testimony')
<!-- End Testimony -->

<!-- Start Chef -->
@include('frontend.home.chef')
<!-- End Chef -->

<!-- Start Info -->
@include('frontend.home.info')
<!-- End Info-->
<!-- Start Blog -->
@include('frontend.home.blog')
<!-- End Blog -->

<!-- Start Book Comment-->
@include('frontend.home.book_comment')
<!-- End  Book CommentBlog -->

@endsection
