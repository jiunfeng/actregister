@extends('layout.app')
@section('title')
會員註冊
@endsection
@section('page')
<br><br><br><br><br>
<p>會員註冊</p>
<form method="POST" action="{{ route('mambersignup1') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Rerty</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>

    @error('password')
    <div class="error">{{ $message }}</div>
    @enderror
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<br><br><br><br>
@endsection