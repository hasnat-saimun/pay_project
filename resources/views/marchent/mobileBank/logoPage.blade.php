@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">মোবাইল ব্যাংকিং</h6>
@endsection 
<div class="container fixed-margin1">
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('bankForm')}}">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3 text-center">
                    <img src="{{ asset('/public/assets/payment') }}/roket.png" alt="" class="rounded w-75">
                    </div>
                    <div class="col-9 text-center">
                    রকেট 
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <a href="{{route('bankForm')}}">
        <div class="col-12">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg" alt="" class="rounded w-75">
                    </div>
                    <div class="col-9 text-center">
                    বিকাশ
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('bankForm')}}">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/nogod.png" alt="" class="w-50">
                    </div>
                    <div class="col-9 text-center">
                    নগদ
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('bankForm')}}">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{asset('/public/assets/payment') }}/upya.png" alt="" class="rounded w-50">
                    </div>
                    <div class="col-9 text-center">
                    উপায়
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <a href="">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <a href="">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <a href="">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <a href="">
        <div class="col-12">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="row mb-2">
        <a href="">
        <div class="col-12">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="row mb-2">
        <a href="">
        <div class="col-12">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="row mb-2">
        <a href="">
        <div class="col-12">
            <div class="card shadow p-2 rounded-0">
                <div class="row align-items-center">
                    <div class="col-3">
                    <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg " alt="" class="w-75">
                    </div>
                    <div class="col-9">
                        Rocket
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
@section('fotterText')
<span>ক্রিকেট প্যাকেজ রিপোর্ট</span>
@endsection