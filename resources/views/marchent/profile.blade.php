@extends('marchent.nav&hover')
@section('chevron')
    <a href="{{route('viewHome')}}">
    <i class="fa-solid fa-chevron-left fa-lg nav-icon"></i>
    </a>
@endsection 
 @section('navText')
<h6 class="text-uppercase mb-0 text-center">প্রোফাইল</h6>
@endsection @section('fotterText')
<span>রিপোর্ট</span>
@endsection
<div class="container fixed-margin1 ">
    <div class="row ">
        <div class="col-12">
            <div class="alert alert-success ">
                <div class="row text-center">
                    <div class="col-12  my-1"><i class="fa-solid bg-rounded fa-user fa-lg bg-light px-2 py-3 rounded"></i></div>
                    <h6 class="text-uppercase mb-0">Vit Professional</h6>
                    <p class="mb-1">01755048017</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h5>প্রোফাইল তথ্য :</h5>
        </div>
        <div class="col-12">
        <table class="table ">
            <tbody class="">
                <tr class="align-items-center">
                    <th ><h5>মালিকের নাম </h5></th>
                    <td><h5>Hasnat Saimun</h5> </td>
                </tr>
                <tr>
                    <th ><h5>দোকানের নাম</h5></th>
                    <td><h5>vit Professional</h5></td>
                </tr>
                <tr>
                    <th ><h5>মোবাইল নম্বর</h5></th>
                        <td><h5>01755048017</h5></td>
                    </tr>
                <tr>
                    <th ><h5>ঠিকানা</h5></th>
                    <td><h5>cumilla</h5></td>
                    </tr>
                <tr>
                    <th ><h5>ইমেইল<h5></th>
                    <td><h5>sadakmoha55@gmail.com</h5></td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>

</div>