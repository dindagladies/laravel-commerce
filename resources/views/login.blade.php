<!doctype html>
<html lang="en">
<!-- head -->
@extends('layout.head')
<!-- content -->
<div class="d-flex justify-content-center align-items-center mt-5" style="position: fixed; bottom: 0px; height: 100%; width: 100%; background-color: rgb(57, 59, 68);">
    <div class="card" style="width: 400px; margin:15px">
        <div class="card-body">
            <form action="/login/proses" method="post">
                <h3 class="text-center">Login</h3>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Password </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <a href="/forgot">Forgot Password?</a> |
                <a href="/login">Sign Up</a>
                <a href="/login/proses" class="btn btn-primary float-right">Login</a>
                <!-- <button class="btn btn-primary float-right" type="submit">Login</button> -->
            </form>
        </div>
    </div>
</div>
<!-- footer -->
@extends('layout.footer')
</html>