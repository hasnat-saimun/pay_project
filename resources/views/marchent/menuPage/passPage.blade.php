@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">পাসওয়ার্ড পরিবর্তন</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="pass" class="form-label ">পাসওয়ার্ড লিখুন</label>
                <input type="password" class="form-control form-control-sm" id="pass" name="pass" placeholder="">
                </select>
            </div>
            <div class="mb-2">
                <label for="newPass" class="form-label ">নতুন পাসওয়ার্ড লিখুন</label>
                <input type="password" class="form-control form-control-sm" id="newPass" name="newPass" placeholder="">
            </div>
            <div class="mb-2">
                <label for="newPassAgin" class="form-label">নতুন পাসওয়ার্ড পুনরায় টাইপ করুন</label>
                <input type="password" class="form-control form-control-sm" id="newPassAgin" name="newPassAgin" placeholder="">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button">পাসওয়ার্ড পরিবর্তন</button>
            </div>
        </form>
    </div>
</div>