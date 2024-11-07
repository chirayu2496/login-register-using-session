@extends('layout.app')

@section('title', 'Register')

@section('content')

    <div class="d-flex justify-content-center align-items-center custom-vh-80">
        <div class="card" style="width: 25rem;">
            <div class="card-header">
                <h3 class="card-title">Register</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('register-store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-3 ">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group mt-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
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
                    <div class="form-group mt-3">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <a href="{{ route('login') }}">Login</a>
                    </div>

                    <div class="float-end mt-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endSection
