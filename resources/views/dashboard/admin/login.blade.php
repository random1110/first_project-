@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">

    <title>Login Admin</title>
    <style>
        body {
    font-family: 'Poppins',sans-serif;
    background-color: #FFFFFF;
    color: #1d1d1d;
}

.container {
    min-height: 100vh;
}

.ri{
    background-color: #F8F8F8;
    box-shadow:  0px 0px 4px #ccc;
    border-radius: 15px ;
}
.left-box {
    border-radius: 15px ;
}

.box-area {
    width: 930px;
}
.btn {

}
.right-box {
    padding: 40px 30px 40px 40px;
}
::placeholder {
    font-size: 16px;
}
@media only screen and (max-width: 768px) {
    .box-area{
        margin: 0 10px;
        height: 575px;
    }
    .left-box {
        height: 190px;
        overflow: hidden;
    }
    .right-box {
        padding: 20px;

    }
}
    </style>
</head>
<body>
    <!---------- Main Container  ------------->
    <div class="container d-flex justify-content-center align-items-center ">
    <!----------  login Container  ------------>
    <div class="row border rounded-5 p-3 box-area ri">
    <!-------------- left box  --------------->
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style=" background-color: #f5c223;    ;">
        <div class="featured-image mb-3">
            <img src="{{ asset('assets/image/r.png') }}" alt="" class="img-fluid" style="width: 300px;">
        </div>
        <p class="text-white fs-2" style="font-weight: 700; letter-spacing: 2px;">Be Verified</p>
        <small class="text-wrap text-center" style="width: 17rem;">login to your account any time </small>
    </div>
    <!-------------- right box ---------------->
    <div class="col-md-6 right-box">
        <div class="row align-items-center mb-4">
            <div class="header-text mb-3">
                <h3>Hello,Again</h3>
                <p>You Can login easy and fast</p>
            </div>
            <form action="{{ route('admin.index')}}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="phone_number" class="form-control form-control-lg bg-light fs-6" placeholder="Phone Number">
            </div>
            <div class="input-group mb-1">
                <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" name="" id="formcheck" class="form-check-input">
                    <label for="formcheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                </div>
                <div class="forget">
                    <small><a href="#" style="color: #389C9A;">Forget Password?</a></small>
                </div>
            </div>
            <div class="input-group mb-3">
                <button  class="btn btn-lg  w-100 fs-6" style="    background-color: #389C9A;
                color: #FFFFFF;" type="submit">Login</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
{{-- @endsection --}}
