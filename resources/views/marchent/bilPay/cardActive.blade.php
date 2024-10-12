@extends('marchent.nav&hover') 
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
@section('navText')
<h6 class="text-uppercase mb-0 text-end">কার্ড একটিভ</h6>
@endsection @section('fotterText')
<span>কার্ড একটিভ সময়</span>
@endsection


<div class="container fixed-margin1">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="cardType" class="form-label ">কার্ড ধরন</label>
                <select id="cardType" class="form-select form-select-sm">
                    <option selected>-- বাছাই করুন --</option>
                    <option>...</option>
                </select>
            </div>
            <div class="row mb-2">
            <div class="col-3">
                <label for="cardType" class="form-label ">বিভাগ</label>
                <select id="cardType" class="form-select form-select-sm">
                    <option selected>--</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-3">
                <label for="cardType" class="form-label ">জেলা </label>
                <select id="cardType" class="form-select form-select-sm">
                    <option selected>--</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-3">
                <label for="cardType" class="form-label ">উপজেলা </label>
                <select id="cardType" class="form-select form-select-sm">
                    <option selected>--</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-3">
                <label for="cardType" class="form-label ">ইউনিয়ন</label>
                <select id="cardType" class="form-select form-select-sm">
                    <option selected>--</option>
                    <option>...</option>
                </select>
            </div>

            </div>
            <div class="mb-2">
                <label for="cardNo" class="form-label ">কার্ড নং </label>
                <input type="text" class="form-control form-control-sm" id="cardNo" name="cardNo" placeholder="আপনার কার্ডের নাম্বার দিন">
            </div>
            <div class="mb-2">
                <label for="cardFree" class="form-label">কার্ড ফ্রী</label>
                <input type="text" class="form-control form-control-sm" id="cardFree" name="cardFree" >
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button"> একটিভ কার্ড</button>
            </div>
        </form>
    </div>
</div>