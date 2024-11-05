@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center custom-vh-80">
    <div class="card" style="width: 25rem;">
        <div class="card-header">
            <h3 class="card-title">Login</h3>
            
        </div>

        <div class="card-body">
            <form action="{{ route('login-verify') }}" method="POST">
                @csrf
                <div class="form-group mt-3 ">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" >
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mt-3">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div>
                    <a href="{{ route('register-show') }}">Register</a>
                </div>
                <div class="float-end mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
    </div>
</div>
   


@endsection