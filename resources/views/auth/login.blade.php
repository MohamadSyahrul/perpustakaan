@extends('layout.auth.master')
@section('title')
    Login
@endsection
@section('content')
<div class="login-content">

    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password"  name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
            <div class="register-link m-t-15 text-center">
                <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
            </div>
        </form>
    </div>
</div>
@endsection