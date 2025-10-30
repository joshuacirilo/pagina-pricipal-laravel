<?php $page = 'error-500'; ?>
@extends('layout.mainlayout')
@section('content')
   
<div class="error-box">
    <img src="{{URL::asset('build/img/error/img-01.svg')}}" alt="img" class="img-fluid bg-01">
    <img src="{{URL::asset('build/img/error/img-02.svg')}}" alt="img" class="img-fluid bg-02">
    <img src="{{URL::asset('build/img/error/img-03.svg')}}" alt="img" class="img-fluid bg-03">
    <img src="{{URL::asset('build/img/error/img-04.svg')}}" alt="img" class="img-fluid bg-04">
    <img src="{{URL::asset('build/img/error/img-05.svg')}}" alt="img" class="img-fluid bg-05">
    <img src="{{URL::asset('build/img/error/img-06.svg')}}" alt="img" class="img-fluid bg-06">
    <div class="error-logo">
        <a href="{{url('index')}}">
            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
        </a>
    </div>
    <div class="error-box-img">
        <img src="{{URL::asset('build/img/error/error-02.svg')}}" alt="Img" class="img-fluid" >
    </div>
    <h3 class="h2 mb-3">Oops! 500 Internal<span class="text-secondary ms-1"> Server Error</span></h3>
    <p class="h4 font-weight-normal">We apologise and are fixing the problem. Please try again at a  later stage</p>
    <a href="{{url('index')}}" class="btn back-to-home-btn d-inline-flex align-items-center"><i class="isax isax-arrow-left-2 me-1"></i> Back to Home</a>
</div>
@endsection
