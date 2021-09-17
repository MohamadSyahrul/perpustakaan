@extends('layout.auth.master')
@section('title')
    Register
@endsection
@section('content')
<div class="login-content">

    <div class="login-form">
        <form>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
            <div class="register-link m-t-15 text-center">
                <p>Already have account ? <a href="{{route('login')}}"> Sign In</a></p>
            </div>
        </form>
    </div>
</div>
@endsection