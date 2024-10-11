@extends('marchent.nav&hover') @section('navText')
<h5 class="text-uppercase mb-0 text-end">বিল পেমেন্ট</h5>
@endsection @section('fotterText')
<span>বিলের ইতিহাস</span>
@endsection
<div class="container fixed-margin1">
    <div class="col-6">
        <div class="card text-bg-light p-4 border-0 shadow">
            <div class="row align-items-center">
                <div class="col-1">
                <i class="fa-sharp fa-light fa-bookmark fa-2xl  icon-color"></i>
                </div>
                <div class="col-8"><p class="mb-0">প্রিয় বিলার</p></div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header ">
                <p class="card-text">কোম্পানির প্রকার নির্বাচন করুন</p>
        </div>
    </div>
    <div class="row text-center mt-3">
    <div class="col-4 ">
            <a href="">
                <div class="card text-bg-light py-4 border-0 shadow">
                <i class="fa-light fa-tv-retro fa-2xl mt-2 icon-color"></i>
                    <p class="mb-0 mt-4">  আকাশ </p> 
                </div>
            </a>
        </div>
        <div class="col-4 ">
            <a href="">
                <div class="card text-bg-light py-4 border-0 shadow">
                    <i class="fa-light fa-lightbulb-on fa-2xl mt-2 icon-color"></i>
                    <p class="mb-0 mt-4"> বিদ্যুৎ </p> 
                </div>
            </a>
        </div>
        <div class="col-4 ">
            <a href="">
                <div class="card text-bg-light py-4 border-0 shadow">
                    <i class="fa-light fa-fire-burner fa-2xl mt-2 icon-color"></i>
                    <p class="mb-0 mt-4"> গ্যাস</p> 
                </div>
            </a>
        </div>
        <div class="col-4 mt-3">
            <a href="">
                <div class="card text-bg-light py-4 border-0 shadow">
                    <i class="fa-light fa-faucet-drip fa-2xl mt-2 icon-color"></i>
                    <p class="mb-0 mt-4"> পানি</p> 
                </div>
            </a>
        </div>
    </div>
</div>
