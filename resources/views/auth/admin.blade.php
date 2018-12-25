@extends('layouts.app')
<head>
    <title>管理員登入</title>
</head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><font face="微軟正黑體">{{ __('登入') }}</font></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">{{ __('信箱') }}</font></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="email" value="{{ old('admin_email') }}" required autofocus>

                                @if ($errors->has('admin_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('admin_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">{{ __('密碼') }}</font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('admin_password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('admin_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('admin_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        <font face="微軟正黑體">{{ __('記住我') }}</font>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <font face="微軟正黑體">{{ __('登入') }}</font>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <font face="微軟正黑體">{{ __('忘記密碼？') }}</font>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
