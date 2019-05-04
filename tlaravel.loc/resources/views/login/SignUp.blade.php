@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')
<head>
    <link rel="stylesheet" href="css/login/styleUp.css">
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
<div class = "FullDiv" style="right: 30%;">
    <div class = "RightDiv">
        <div class = "InsDiv" style="right: 13%;">
            <form method="post" action="{{ url('/signUp/addToDB') }}">
                {{ csrf_field() }}
            <h1>Create an account</h1>
            <span><i>Already have an account?</i></span>
            <span><a href="{{ route('product.signin')}}"><i>Sign in here</i></a></span></br>
            <p>YOUR NAME</p>
            <input type="text" name="name" placeholder="Full Name">
            <p>YOUR EMAIL</p>
            <input type="text" name="email" placeholder="your-email@example.com">
            <p>YOUR CITY</p>
            <input type="text" name="city" placeholder="Your City">
            <p>YOUR ADDRESS</p>
            <input type="text" name="address" placeholder="Your Address">
            
            <p>YOUR PASSWORD</p>
            <input type="password" name="password" placeholder="Choose something secure"></br>
            <p>REPEAT PASSWORD</p>
            <input type="password" name="password_confirmation" placeholder="Please repeat"></br></br></br>
            <a href="{{route('product.signin')}}"><input type="submit" name="submit" value="CREATE FREE ACCOUNT"></a>
            </form>
        </div>
    </div>
</div>
<div class="footer" style = "position:absolute;top:855px;height: 50px;background-color: black;color:white;width: 100%; ">
    <p style="text-align: center">&copy; 2018-2019</p>
</div>
</body>
@endsection
