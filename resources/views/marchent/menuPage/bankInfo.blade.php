@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">ব্যাংক তথ্য দিন</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="holderName" class="form-label ">অ্যাকাউন্ট হোল্ডার নাম</label>
                <input type="text" class="form-control form-control-sm" id="holderName" name="holderName" placeholder="">
            </div>
            <div class="mb-2">
                <label for="accountNo" class="form-label">অ্যাকাউন্ট নং</label>
                <input type="number" class="form-control form-control-sm" id="accountNo" name="accountNo" placeholder="">
            </div>
            <div class="mb-2">
                <label for="bankName" class="form-label ">ব্যাংক নাম</label>
                <select id="bankName" name="bankName" class="form-select form-select-sm">
                    <option selected>--</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="raotingNo" class="form-label">ব্যাংক রাউটিং নং</label>
                <input type="number" class="form-control form-control-sm" id="raotingNo" name="raotingNo" placeholder="">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button">সেভ করুন</button>
            </div>
        </form>
    </div>
</div>