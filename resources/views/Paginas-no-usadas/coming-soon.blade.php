<?php $page = 'coming-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box coming-soon-content">
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
        <div class="coming-soon-topic">
            <h3 class="h2 mb-3">We are Coming<span class="text-secondary ms-1"> Soon!!!</span></h3>
            <p>Stay tuned for something amazing</p>
        </div>
        <ul class="coming-soon-timer">
            <li><span class="days">54</span>days</li>
            <li class="seperate-dot"></li>
            <li><span class="hours">10</span>Hrs</li>
            <li class="seperate-dot"></li>
            <li><span class="minutes">47</span>Min</li>
            <li class="seperate-dot"></li>
            <li><span class="seconds">00</span>Sec</li>
        </ul>
        <div class="error-box-img coming-soon-img">
            <img src="{{URL::asset('build/img/error/coming-soon.svg')}}" alt="Img" class="img-fluid">
        </div>
        <form class="mt-5">
                <b>Notify me when the website is launched</b>
                <div class="bg-white border rounded-2 p-2 mt-2 mb-3">
                    <div class="input-group">
                        <input class="form-control focus-shadow-none border-0 me-1" type="email" placeholder="Enter your email">
                        <button type="button" class="btn btn-secondary rounded-2 mb-0">Notify Me!</button>
                    </div>
                </div>
            </form>
        <div class="d-flex align-items-center justify-content-center">
            <a href="javascript:void(0);" class="coming-soon media-btn rounded-circle d-inline-flex align-items-center justify-content-center me-2"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="javascript:void(0);" class="coming-soon media-btn rounded-circle d-inline-flex align-items-center justify-content-center me-2"><i class="fa-brands fa-instagram"></i></a>
            <a href="javascript:void(0);" class="coming-soon media-btn rounded-circle d-inline-flex align-items-center justify-content-center me-2"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="javascript:void(0);" class="coming-soon media-btn rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>
@endsection
