@extends('layouts.app')

@section('content')
<div class="container">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">{{ __('Reset Password') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="control{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </span>
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>            
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">New Password</label>
                            <div class="control has-icons-right">
                                <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" required>
                                
                                @if ($errors->has('password'))
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="field">
                            <label class="label">Confirm Password</label>
                            <div class="control has-icons-right">
                                <input class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" name="password_confirmation" required>
                                
                                @if ($errors->has('password_confirmation'))
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
