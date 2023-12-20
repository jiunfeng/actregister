@extends('layout.app')
@section('title')
會員中心
@endsection
@section('page')
<style>
    /* 將form-control 改回自己設定不然會吃寬度100% */
    .form-control {
        /* width: auto; */
    }
</style>
<form action="editpassword">
    <div class="container mt-5">
        <div class="row text-center mt-5">
            <div class="col-6 mt-3">會員資料</div>
        </div>
        <div class="row justify-content-start m-2">
            <label for="username" class="col-2 form-label">會員姓名:</label>
            <input type="text" id="username" name="username" class="form-control w-auto"
                value="{{auth()->user()->UserName}}">
        </div>
        <div class="row justify-content-start m-2">
            <label for="Gender" class="col-2 form-label">性別:</label>
            <input type="text" id="Gender" name="Gender" class="form-control w-25" value="{{auth()->user()->Gender}}">
        </div>
        <div class="row justify-content-start m-2">
            <label for="email" class="col-2 form-label">email:</label>
            <input type="text" id="email" name="email" class="form-control w-50" value="{{auth()->user()->email}}">
        </div>
        <div class="row justify-content-start m-2">
            <label for="Mobile" class="col-2 form-label">手機號碼:</label>
            <input type="text" id="Mobile" name="Mobile" class="form-control w-auto" value="{{auth()->user()->Mobile}}">
        </div>
        <div class="row justify-content-start m-2">
            <label for="Address" class="col-2 form-label">地址:</label>
            <input type="text" id="Address" name="Address" class="form-control w-75"
                value="{{auth()->user()->Address}}">
        </div>
        <div class="row justify-content-start m-2">
            <label for="Birthdate" class="col-2 form-label">出生日期:</label>
            <input type="text" id="Birthdate" name="Birthdate" class="form-control w-auto"
                value="{{auth()->user()->Birthdate}}">
        </div>


    </div>
</form>
@endsection