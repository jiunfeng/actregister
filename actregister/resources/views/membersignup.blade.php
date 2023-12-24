@extends('layout.app')

@section('title')
會員註冊
@endsection

@section('head')
{{--
<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

@endsection



@section('page')
<div class="memberformtitle">
    <p>會員註冊</p>
</div>
<div class="container memberform">

    <form method="POST" action="{{ route('mambersignup') }}">
        @csrf
        <div class="row align-items-center" aria-describedby="姓名性別">
            <label for="username" class="form-label col-2">姓名</label>
            <input type="text" class="form-control col" name="username" id="username" required placeholder="中文全名"
                value="{{ old('username') }}">
            <div class="col p-1">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" required value="male"
                        @if(old('gender')=='male' ) checked @endif>
                    <label class="form-check-label" for="flexRadioDefault1">
                        男性
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="female"
                        @if(old('gender')=='female' ) checked @endif>
                    <label class="form-check-label" for="flexRadioDefault2">
                        女性
                    </label>
                </div>
            </div>
        </div>
        <div class="row align-items-center" aria-describedby="出生日期">
            <label for="birthdate form-label" class="col-2 form-label">出生日期</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control col" required
                value="{{ old('birthdate') }}">
            <div class="col-7"></div>
        </div>

        <div class="row align-items-center" aria-describedby="email">
            <label for="email" class="form-label col-2">Email</label>
            <input type="email" name="email" id="email" class="form-control col" required placeholder="name@example.com"
                value="{{ old('email') }}">
            <div class="col-5">

            </div>
            <div class="row">
                @error('email')
                <div class="error offset-2 col-5">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row align-items-center">
            <label for="password" class="form-label col-2">Password</label>
            <input type="password" class="form-control col" id="password" name="password" placeholder="最少8位" required>

            <input type="password" class="form-control col mx-2" id="password_confirmation" name="password_confirmation"
                placeholder="重複確認" required>
            <div class="row">
                @error('password')
                <div class="error offset-2 col-4">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row align-items-center" aria-describedby="手機號碼">
            <label for="mobile" class="form-label col-2 ">手機號碼</label>
            <input type="tel" class="form-control col" name="mobile" id="mobile" placeholder="ex:0987987987" required
                value="{{ old('mobile') }}">
            <div class="col-7"></div>
            <div class="row">
                @error('mobile')
                <div class="error offset-2 col-4">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row align-items-center" aria-describedby="地址">
            <label for="address" class="form-label col-2">地址</label>
            <input type="text" class="form-control col" name="address" id="address" required
                value="{{ old('address') }}">
            <div class="col-3"></div>
        </div>
        <button type="submit" class="btn btn-primary">註冊會員</button>
    </form>



    @endsection