@extends('layouts.auth')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center mt-4 mx-0">
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow-none">
                <div class="card-body p-sm-6">
                    <div class="text-center mb-4">
                        <h4 class="mb-1">Daftar</h4>
                        <p>Silahkan daftarkan diri anda</p>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Nama Lengkap<span class="text-danger ms-1">*</span></label>
                                    <input class="form-control ms-0 @error('name') is-invalid @enderror" type="text" placeholder="Masukkan nama lengkap kamu" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Username<span class="text-danger ms-1">*</span></label>
                                    <input class="form-control ms-0 @error('username') is-invalid @enderror" type="text" placeholder="Masukkan username kamu" name="username" value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                    <input class="form-control ms-0 @error('email') is-invalid @enderror" type="email" placeholder="Masukkan email kamu" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                    <input type="password" class="form-control ms-0 @error('password') is-invalid @enderror" id="input-password" placeholder="Password" name="password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="d-grid mb-3">
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                </div>
                                <hr>
                                <div class="text-center">
                                    <p class="mb-0 tx-14">Sudah punya akun?
                                        <a href="{{ route('login') }}" class="tx-primary ms-1 text-decoration-underline">Login</a>
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