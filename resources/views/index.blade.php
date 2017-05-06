@extends('layouts.master')

@section('content')

    <div class="bg">
        <div class="container">
            <div class="custom">
                <div class="col-md-8">
                    <h1 style="font-size: 80px;"><strong>Checkin</strong></h1>
                    <h3><strong>Manage Employee checkins the easy way</strong></h3>
                    <p>All logs for checkins and checkouts.</p>
                </div>
                <div class="col-md-4">
                    <h3><strong>Your Creds to checkin</strong></h3>
                    <h4>Its as simple as that.</h4>
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="someone@ensibuuko.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="***************">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success"> Login </button>
                                 ---- OR ---- 
                                <a href="/register" class="btn btn-danger"> SignUp</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="blocks">
        <div class="col-md-2"></div>
        <div class="col-md-2 one">
            <center><p class="icons"><i class="fa fa-git"></i></p></center>
        </div>
        <div class="col-md-2 two">
            <center><p class="icons"><i class="fa fa-home"></i></p></center>
        </div>
        <div class="col-md-2 three">
            <center><p class="icons"><i class="fa fa-info"></i></p></center>
        </div>
        <div class="col-md-2 four">
            <center><p class="icons"><i class="fa fa-gear"></i></p></center>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection