@extends('layouts.masterlogin')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <h4>Sistem Informasi Gudang Buah</h4>
                    <h6 class="fw-light">Halo Sign Up Untuk Melanjutkan.</h6>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <button type="submit"
                                class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Tetap Login') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <!-- <a class="auth-link text-black" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a> -->
                            @endif
                        </div>
                        <div class="text-center mt-4 fw-light">
                            Tidak memiliki akun? <a href="/register" class="text-primary">Create</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endsection