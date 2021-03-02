<!doctype html>
<html lang="en">
<!-- head -->
@extends('layout.head')
<div class="d-flex justify-content-center align-items-center mt-5" style="position: fixed; bottom: 0px; height: 100%; width: 100%; background-color: rgb(57, 59, 68);">
    <div class="card" style="width: 400px; margin:15px">
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <h3 class="text-center">Register</h3>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label">Name</label>
                    <div class="label-input">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail Address</label>
                    <div class="label-input">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <div class="label-input">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="control-label">Confirm Password</label>
                    <div class="label-input">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-4">
                        <!-- <button type="submit" class="btn btn-primary">
                            Register
                        </button> -->
                        Sudah punya akun ? |
                        <a href="/login">Sign In</a>
                        <button class="btn btn-primary float-right" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
@extends('layout.footer')
</html>