@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">বেচা বিক্রি</h6>
@endsection 
@section('fotterText')
<span>বেচা বিক্রি ইতিহাস</span>
@endsection
<div class="container fixed-margin1">
    <div class="row text-center">
        <div class="co-12">
        <div class="card text-bg-light border-0 shadow  ">
                    <p class="mt-2 mb-0 ">আজকের বিক্রি</p> 
                    <p >ট 0 </p>
                </div>
        </div>
                
    </div>
    
    <div class="col-12 card text-bg-light mt-4 shadow">
    <div class="row text-center ">
            <div class="col-4 border-end  ">
                <p class="mt-2 mb-0">আজকের আয় </p> 
                <p >ট 0 </p>
            </div>
            <div class="col-4  border-end ">
                <p class="mt-2 mb-0">আজকের ব্যয় </p> 
                <p >ট 0 </p>
            </div>
            <div class="col-4 ">
                <p class="mt-2 mb-0">আজকের ক্রয় </p> 
                <p >ট 0 </p>
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-chart-mixed fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4">বিক্রি করুন</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-cart-plus fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4">ক্রয় করুন</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-regular fa-book-arrow-up fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> 
                            বাকি </p> 
                        </div>
                    </a>
                </div>
             </div>
            <!-- card-part -->
             <div class="row text-center mt-3">
                <div class="col-4 ">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-regular fa-book-open-cover fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> খরচের খাতা</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 ">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-users fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> কাস্টমার</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 ">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-shop fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> বিক্রেতা</p> 
                        </div>
                    </a>
                </div>
                <div class="col-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light py-4 border-0 shadow">
                            <i class="fa-thin fa-boxes-stacked fa-2xl mt-2 icon-color"></i>
                            <p class="mb-0 mt-4"> পণ্য</p> 
                        </div>
                    </a>
                </div>
             </div>
</div>