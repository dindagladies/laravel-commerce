<!doctype html>
<html lang="en">
<!-- head -->
@extends('layout.head')
<!-- content -->
<div class="d-flex justify-content-center align-items-center mt-5" style="position: fixed; bottom: 0px; height: 100%; width: 100%; background-color: rgb(57, 59, 68);">
    <div class="card" style="width: 400px; margin:15px">
        <div class="card-body">
            <form action="/login/proses" method="post">
                <h3 class="text-center">Register</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                Sudah punya akun ? |
                <a href="/login">Sign In</a>
                <a href="/login/proses" class="btn btn-primary float-right">Sign Up</a>
                <!-- <button class="btn btn-primary float-right" type="submit">Login</button> -->
            </form>
        </div>
    </div>
</div>
<!-- footer -->
@extends('layout.footer')
</html>