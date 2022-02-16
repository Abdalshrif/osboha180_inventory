@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<!-- Start home-page -->
<div class="home-page">
    <div class="container">
        <div class="text">
            <h2>Welcome, To OSBOHA180</h2>
            <p>Lorem ipsum dolor sit amet consectetur. adipisicing elit.
             ipsum  adipisicing elit. Sit. ipsumconsectetur, adipisicing elit adipea</p>
        </div>
        <div class="image">
            <img src="{{asset('asset/Images/welcome.png')}}" alt="">
        </div>
    </div>
    <a href="#Articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
</div>
<!-- End Landing -->
    </div>
</div>
@endsection
