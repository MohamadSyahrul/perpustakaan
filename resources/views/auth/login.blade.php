@extends('layout.auth.master')
@section('title')
    Login
@endsection
@section('content')
<div class="login-content">

    <div class="login-form">
        <form>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
            <div class="register-link m-t-15 text-center">
                <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
            </div>
        </form>
    </div>
</div>
@endsection