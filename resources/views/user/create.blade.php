@extends('layouts.blank')

@section('title')
    Sign Up
@endsection

@section('body')
    @push('styles')
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    @endpush

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="/"><b>Admin</b>LTE</a>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new account</p>

                    <form action="/user/register" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input name="name" id="name" type="text" class="form-control" placeholder="Full name" value="{{ old('name') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>

                        </div>
                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>

                        </div>
                        @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input name="password" id="password" type="password" class="form-control"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                                @error('terms')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="/user/login" class="text-center">I already have account</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        {{-- Tag Penutup body ada di blank.blade.php --}}
    @endsection
