@extends('layouts.app')

@section('content')
<div class="container">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">{{ __('Reset Password') }}</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="help is-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email input" name="email" required>
                                <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                                </span>
                                @if ($errors->has('email'))
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>

                        <button class="button is-primary is-fullwidth m-t-30">Send Reset Link</button>
                        <h5 class="has-text-centered m-t-10"><a href="{{route('login')}}" class="is-secondary">Go Back to Login.</a></h5>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
