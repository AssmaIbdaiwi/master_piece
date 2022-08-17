@extends('layouts.app')
@section('content')
<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="../css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="../css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="../css/owl-carousel/owl.carousel.css" />

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="../css/magnific-popup/magnific-popup.css" />

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="../revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="../css/responsive.css" />
{{-- ///// --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(16, 16, 17, 0.518)">
                <div style="color:white; border-color:white" class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label style="color:white" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input style="background-color: rgb(202, 214, 224); border-color:#e3e3e3" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
