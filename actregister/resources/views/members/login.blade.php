@extends('layout.app')
@section('title')
KSB報名網-登入
@endsection
@section('page')
<style>
    .loginview .col {
        background-color: black;
    }
</style>
<div class="container mt-5">
    <form action="{{ route('members.login') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-5 ">會員登入
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <label for="login" class="form-label">E-mail:</label>
                <input type="email" id="login" name="email" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 mt-2">
                <button type="submit" class="btn btn-primary">登入</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="123"
                        style="color: white;text-decoration: none;">加入會員</a></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="123"
                        style="color: white;text-decoration: none;">忘記密碼</a></button>
            </div>
        </div>
    </form>
</div>




{{-- <form action="">
    <div class="row flex-column align-items-center">
        <div class="col-6">會員登入
            <hr>
        </div>

        <div class="col-6"><label for="login-name">E-mail:</label>
            <input type="email" class="form-control" name="email" id="login-email" placeholder="name@example.com">
        </div>


        <div class="col-3">會員登入3333333333333</div>
</form> --}}


@endsection