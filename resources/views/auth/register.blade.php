@extends('layout.auth')

@section('title', 'Halaman Register Perpustakaan')

@section('content')
    <section class="text-center">
        <div class="p-5 bg-image"
            style="background-image: url('https://cdn.pixabay.com/photo/2023/11/16/19/21/ai-generated-8392929_960_720.png'); height: 300px;">
        </div>

        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary"
            style="margin-top: -100px; backdrop-filter: blur(30px);">
            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Daftar Sekarang</h2>

                        <form action="{{ route('register.submit') }}" method="POST">
                            @csrf

                            <div data-mdb-input-init class="form-outline mb-0">
                                <input type="text" name="username" id="usernameInput" class="form-control" placeholder="Username" />
                                <label class="form-label" for="usernameInput">Username</label>
                            </div>
                            @error('username')
                                <div class="text-danger text-start small mt-1">{{ $message }}</div>
                            @enderror

                            <div data-mdb-input-init class="form-outline mb-0 mt-4">
                                <input type="email" name="email" id="emailInput" class="form-control" placeholder="Email" />
                                <label class="form-label" for="emailInput">Email</label>
                            </div>
                            @error('email')
                                <div class="text-danger text-start small mt-1">{{ $message }}</div>
                            @enderror

                            <div data-mdb-input-init class="form-outline mb-0 mt-4">
                                <input type="password" name="password" id="passwordInput" class="form-control" placeholder="Password" />
                                <label class="form-label" for="passwordInput">Password</label>
                            </div>
                            @error('password')
                                <div class="text-danger text-start small mt-1">{{ $message }}</div>
                            @enderror

                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-block mb-4 mt-4">
                                Daftar akun
                            </button>

                            <p class="text-center mb-0">Sudah punya akun?
                                <a href="{{ route('login') }}" class="link-info">Log In</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
