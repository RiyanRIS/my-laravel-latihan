@extends('layouts.auth')

@section('content')
    <div class="container-lg">
        <div class="row justify-content-center mt-4 mx-0">
            <div class="col-xl-4 col-lg-6">
                <div class="card shadow-none">
                    <div class="card-body p-sm-6">
                        <div class="text-center mb-4">
                            <h4 class="mb-1">Masuk</h4>
                            <p>Silahkan masuk ke akun anda</p>
                        </div>
                        <div class="row">
                           
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Username<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control ms-0 @error('username') is-invalid @enderror"
                                            type="username" placeholder="Masukkan Username" name="username"
                                            value="{{ old('username') }}" autofocus="">
                                        @error('username')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex mb-3">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label tx-15" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="ms-auto">
                                                <a href="{{ route('password.request') }}"
                                                    class="tx-primary ms-1 tx-13">Forgot
                                                    Password?</a>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="d-grid mb-3">
                                        <input type="submit" class="btn btn-primary" value="Login">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <p class="mb-0 tx-14">Don't have an account yet?
                                            <a href="{{ route('register') }}" class="tx-primary ms-1 text-decoration-underline">Sign
                                                Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
