@extends('layout.auth')

@section('title', 'Halaman Login Perpustakaan')

@section('content')

    <style>
        input.form-control {
            transition: all 0.3s ease;
        }

        input.form-control:focus {
            border-color: #0dcaf0;
            box-shadow: 0 0 0 0.2rem rgba(13, 202, 240, 0.25);
        }

        .btn-info {
            width: 100%;
        }
    </style>


    <body class="overflow-hidden bg-light">
        <section class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow-lg w-100"
                style="max-width: 900px; max-height: 90vh; border-radius: 1rem; overflow: hidden;">
                <div class="row g-0 h-100">
                    <div class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-center overflow-auto">
                        <div class="mb-4 text-center text-md-start">
                            <i class="fas fa-book fa-2x me-2" style="color: #0dcaf0;"></i>
                            <span class="h1 fw-bold">Perpustakaan</span>
                        </div>

                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf

                            <h3 class="fw-normal mb-3 pb-2 text-center text-md-start" style="letter-spacing: 1px;">Log in
                            </h3>

                            <div data-mdb-input-init class="form-outline mb-0 mt-4">
                                <input type="text" name="username" id="formUsername" class="form-control form-control-lg"
                                    placeholder="Username anda"/>
                                <label class="form-label" for="formEmail">Username</label>
                            </div>
                            @error('username')
                                <div class="text-danger text-start small mt-1">{{ $message }}</div>
                            @enderror

                            <div data-mdb-input-init class="form-outline mb-0 mt-4">
                                <input type="password" name="password" id="formPassword" class="form-control form-control-lg"
                                    placeholder="Kata sandi"/>
                                <label class="form-label" for="formPassword">Password</label>
                            </div>
                            @error('password')
                                <div class="text-danger text-start small mt-1">{{ $message }}</div>
                            @enderror

                            <div class="pt-1 mt-4 mb-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg"
                                    type="submit">Login</button>
                            </div>

                            <p class="text-center mt-3">Tidak punya akun?
                                <a href="{{ route('register') }}" class="link-info">Register</a>
                            </p>
                        </form>
                    </div>

                    <div class="col-md-6 d-none d-md-block">
                        <img src="https://cdn.pixabay.com/photo/2015/06/13/11/28/library-807931_960_720.jpg"
                            alt="Login image" class="img-fluid h-100 w-100" style="object-fit: cover;" />
                    </div>
                </div>
            </div>
        </section>
    @endsection
