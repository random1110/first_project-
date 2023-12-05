<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container d-flex  justify-content-center  align-items-center ">
        <div class="row border rounder-5 p-3 bg-white shadow box-area" style="    box-shadow: 0 0 2px #00000075;
        ">
            <div class="col-md-6 rounder-4 d-flex justify-content-center  align-items-center flex-column left-box" style=" border-radius: 20px;">
                <div class="featured-image mb-3">
                    <img src="../../../css/image/login.png" class="img-fluid" style="width: 350px;    height: 350px; border-radius: 20px;                   ">
                </div>

                <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace;">Be Verified</p>
                <p class="text-black text-wrap text-center">I am Happy  Return Visit</p>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center ">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="{{admin.login.post}}" method="post" class="f">
                    <div class="input-group mb-3 ">
                        <input type="text" name="phone_number" class="form-control form-control-lg bg-light fs-6" placeholder="Phone Number" >
                    </div>
                    <div class="input-group mb-1 ">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" style="border-radius:10px">
                    </div>
                    <div class="input-group mb-3 mt-4">
                        <button class="btn btn-lg btn-primary w-100 h-50 fs-6 " style="border-radius:10px;background-color: #F9BC60" type="submit">Login</button>
                    </div>
                    <small class="">Don't have account? <a href="#">Sign Up</a></small>
                </form>
                </div>

            </div>

        </div>
    </div>
</body>
</html>
