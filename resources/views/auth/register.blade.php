@extends('layouts.app')

@section('content')

<div class="container">
    <div class="column is-one-third is-offset-one-third m-t-50">
    <form action="{{route('register')}}" method="POST" role="form">
        @csrf
        <div class="card">
            <div class="card-content">
                <h1 class="title">Create An Account</h1>
                <hr>
                
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('username') ? ' is-danger' : '' }}" type="text" placeholder="Enter your Username" name="username">
                        <span class="icon is-small is-left">
                        <i class="fa fa-fw fa-user-circle-o"></i>
                        </span>
                        @if ($errors->has('username'))
                        <span class="icon is-small is-right">
                            <i class="fa fa-exclamation-triangle"></i>
                        </span>
                        <p class="help is-danger">{{ $errors->first('username') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="eg. firstname.lastname@app.com" name="email">
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
                
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control has-icons-right">
                                <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password">
                        
                                @if ($errors->has('password'))
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Confirm Password</label>
                            <div class="control has-icons-right">
                                <input class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" name="password_confirmation">
                                
                                @if ($errors->has('password_confirmation'))
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                    
                
                <button class="button is-primary is-outlined is-fullwidth m-t-30">Register ! </button>
            </div><!-- end of .card-content-->
        </div><!-- end of .card-->
        </form> <!--end of the form -->
        <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already Have An Account ?</a></h5>
    </div><!-- end of .column-->
</div><!-- end of .container-->

@endsection
