@extends('layouts.app')

@section('content')

<div class="container">
    <div class="column is-one-third is-offset-one-third m-t-50">
    <form action="{{route('login')}}" method="POST" role="form">
        @csrf
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <hr>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email input" name="email">
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
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="type your password..." name="password">
                        <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                        </span>
                        @if ($errors->has('password'))
                        <span class="icon is-small is-right">
                            <i class="fa fa-exclamation-triangle"></i>
                        </span>
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                </div>
                    
                <b-checkbox name="remember" class="m-t-20" {{ old('remember') ? 'checked' : '' }}>Remember Me</b-checkbox>
*
                <button class="button is-primary is-fullwidth m-t-30">Log In</button>
                <h5 class="has-text-centered"><a href="{{route('register')}}" class="is-secondary">You dont have an Account?Click here.</a></h5>

            </div><!-- end of .card-content-->
        </div><!-- end of .card-->
        </form> <!--end of the form -->
        <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot your Password ?</a></h5>
    </div><!-- end of .column-->
</div><!-- end of .container-->

@endsection
