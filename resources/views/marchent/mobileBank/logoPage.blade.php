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
    <div class="row">
        <div class="col-4">
            <a href="{{route('bankForm')}}">
                <div class="alert alert-success text-center">
                    <img src="{{ asset('/public/assets/payment') }}/roket.png" alt="" class="rounded" style=" width: 60%;">
                    <p class="mb-0 mt-2">রকেট</p>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="{{route('bankForm')}}">
                <div class="alert alert-success text-center">
                <img src="{{ asset('/public/assets/payment') }}/bkash1.jpg" alt="" class="rounded " style=" width: 75%;">
                    <p class="mb-0 mt-2"> বিকাশ</p>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="{{route('bankForm')}}">
                <div class="alert alert-success text-center">
                <img src="{{ asset('/public/assets/payment') }}/nogod.png" alt="" style=" width: 40%;">
                    <p class="mb-0 mt-2">নগদ</p>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="{{route('bankForm')}}">
                <div class="alert alert-success text-center">
                <img src="{{asset('/public/assets/payment') }}/upya.png" alt="" class="rounded " style=" width: 40%;">
                    <p class="mb-0 mt-2">উপায়</p>
                </div>
            </a>
        </div>
    </div>
</div>
@section('fotterText')
<span>ক্রিকেট প্যাকেজ রিপোর্ট</span>
@endsection