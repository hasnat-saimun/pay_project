@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('logoPage')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">এনআইডির ছবি</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="row">
        <div class="col-8 mx-auto">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-4">
                <label for="fristImg" class="form-label ">আইডি কার্ডের উপরের অংশের ছবি</label>
                <input type="file" class="form-control form-control-sm" id="fristImg" name="fristImg" />
            </div>
            <div class="mb-4">
                <label for="lastImg" class="form-label ">আইডি কার্ডের নিচের অংশের ছবি</label>
                <input type="file" class="form-control form-control-sm" id="lastImg" name="lastImg" />
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button">জমা করুন</button>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>