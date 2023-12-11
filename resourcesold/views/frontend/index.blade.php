<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Login Form Demo</title>
</head>

<body>

    <div class="login-wrapper">
        <form action="{{ route('customerLogin') }}" class="form" method="POST">
            @csrf
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="loginUser" id="loginUser" required />
                <label for="loginUser">User Name</label>
            </div>
            <div class="input-group">
                <input type="password" name="loginPassword" id="loginPassword" required />
                <label for="loginPassword">Password</label>
            </div>
            <input type="submit" value="Login" class="submit-btn" />
        </form>
    </div>


    <div class="login-wrapper">
    <h2>Registation</h2>
        <form method="POST" action="{{ route('customerRegister') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" id="fname1" class="form-control border-0 border-bottom" placeholder="First Name">
                <div class="error_msg error" id="fname1_error">Please Enter Your First Name</div>
            </div>
            <div class="mb-3">
                <input type="text" name="last_name" id="lname1" class="form-control border-0 border-bottom" placeholder="Last Name">
                <div class="error_msg error" id="lname1_error">Please Enter Your Last Name</div>
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email1" class="form-control border-0 border-bottom" placeholder="Email">
                <div class="error_msg error" id="email1_error">Please Enter Your proper Email</div>
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password1" class="form-control border-0 border-bottom" placeholder="Create Your Password">
                <div class="error_msg error" id="password1_error">Please Enter Your password</div>
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label monteserrat" for="exampleCheck1">By clicking 'Create Account'
                    you confirm that you accept <a href="#" style="color:#194FA1">Terms and Conditions</a>.
                    Please view our privacy policy to find out more about how we collect, use and keep your
                    data safe.</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="commonButton customerRegister">CREATE ACCOUNT</button>
            </div>
        </form>
    </div>
</body>

</html>

<!-- @if (Auth::guard('web')->check())
<div class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link loginDropDown dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::guard('web')->user()->name; }}
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('userLogout') }}"> {{ __('Logout') }} </a>
        <a class="dropdown-item" href="/wishlist"> Wish List </a>
    </div>

</div>
@else
<div class="loginButtonHeader">
    <a href="#loginModal" class="commonButton transition" data-bs-toggle="modal">Login</a>
    <div class="menu btn1 d-block d-lg-none" data-menu="1">
        <div class="icon-left"></div>
        <div class="icon-right"></div>
    </div>
</div>
@endif -->