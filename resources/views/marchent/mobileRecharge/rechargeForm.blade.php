@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">মোবাইল রিচার্জ</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="oparetorName" class="form-label ">অপারেটর নির্বাচন করুন</label>
                <select id="oparetorName" name="oparetorName" class="form-select form-select-sm">
                    <option selected>--</option>
                    <option>গ্রামীণফোন</option>ব্যাংক তথ্য দিন
                    <option>এয়ারটেল </option>
                    <option>টেলিটক</option>
                    <option>রবি</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="mobileNumber" class="form-label ">মোবাইল নাম্বার</label>
                <input type="number" class="form-control form-control-sm" id="mobileNumber" name="mobileNumber" placeholder="01xxxxxxxxx">
            </div>
            <div class="mb-2">
                <label for="amount" class="form-label">টাকার পরিমান</label>
                <input type="number" class="form-control form-control-sm" id="amount" name="amount" placeholder="0.00">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button">রিচার্জ করুন</button>
            </div>
        </form>
    </div>
</div>