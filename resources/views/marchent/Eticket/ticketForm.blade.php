@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-end">বাস টিকেট</h6>
@endsection @section('fotterText')
<span>ক্রিকেট প্যাকেজ রিপোর্ট</span>
@endsection
<div class="container fixed-margin1">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="inputState" class="form-label ">Journey form</label>
                <select id="inputState" class="form-select form-select-sm">
                    <option selected>-- Select Station --</option>
                    <option>...</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="inputState" class="form-label ">Journey to</label>
                <select id="inputState" class="form-select form-select-sm">
                    <option selected>-- Select Station --</option>
                    <option></option>
                </select>
            </div>
            <div class="mb-2">
                <label for="formGroupExampleInput" class="form-label">Date</label>
                <input type="date" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-color btn-sm" type="button"><i class="fa-light fa-magnifying-glass"></i>  Seach Coach</button>
            </div>
        </form>
    </div>
</div>