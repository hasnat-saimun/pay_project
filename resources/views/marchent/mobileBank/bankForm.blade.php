@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('logoPage')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">লোগোর নাম বসবে</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="row">
        <div class="col-8 mx-auto">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="accName" class="form-label ">অ্যাকাউন্ট নাম</label>
                <input type="text" class="form-control form-control-sm" id="accName" name="accName" placeholder="">
                </select>
            </div>
            <div class="mb-2">
                <label for="accNumber" class="form-label ">অ্যাকাউন্ট নাম্বার</label>
                <input type="text" class="form-control form-control-sm" id="accNumber" name="accNumber" placeholder="">
            </div>
            <div class="mb-2">
                <label for="userName" class="form-label">ইউজার নাম</label>
                <input type="text" class="form-control form-control-sm" id="userName" name="userName" placeholder="">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button">জমা করুন</button>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>