@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">দৈনিক রিপোর্ট</h6>
@endsection 
<div class="container fixed-margin1">
    <div class="row">
        <div class="col-6">
            <div class="alert alert-success">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">ওপেনিং ব্যালেন্স </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="alert alert-danger">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">লাস্ট ব্যালেন্স </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="alert alert-info">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">রিসিভ ব্যালেন্স </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="alert alert-primary">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">ক্যাশ ব্যাক</div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="alert alert-warning">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">মোট কমিশন </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="alert alert-dark">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">বিল পে </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="alert alert-success">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">টিকেট ক্রয় </div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="alert alert-danger">
                <div class="row align-items-center">
                    <div class="col-8 text-start my-1"><i class="fa-sharp fa-thin fa-coins fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <div class="col-4 text-end my-1"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    <div class="col-12 my-1">মোবাইল ব্যাংকিং কমিশন</div>
                    <div class="col-12 my-1">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        0.00%
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('fotterText')
<span>ক্রিকেট প্যাকেজ রিপোর্ট</span>
@endsection