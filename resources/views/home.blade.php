@extends('main')
@section('content')      
        
        {{-- @include('sections.test_nav') --}}

        @include('sections.video')
        <br>
        <br>
        @include('include.nav')
        <span id="about_me"></span>
        <br>
        <br>
        <br>
        <br>
        @include('sections.about_me')
        <br>
        <br>
        @include('sections.tour_date')
        <br>
        <br>
        @include('sections.music')
        <br>
        <br>
        @include('sections.photos')
        <br>
        <br>
        @include('sections.form')
        <br>
        <br>
  @endsection
