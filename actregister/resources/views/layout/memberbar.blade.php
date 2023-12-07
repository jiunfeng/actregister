{{-- 首頁布局使用者資訊欄TOP --}}

<style>
    /* memberbar login 互動視窗 需要有這個否則按鈕互動後會全域不可操作*/
    .modal-backdrop {

        position: relative;

    }

    .login_button {
        background-color: var(--bargc-2);
        border: none;
        color: blue;
    }

    .navbar {
        background-color: var(--bargc-2);
        height: auto;

    }
</style>

{{-- navbar-expand-sm 寬度大於等於 576 會隱藏右上導覽列 --}}
<nav class="navbar navbar-expand-sm fixed-top ">
    <div class="container-fluid ">

        <div class="col-2"></div>
        <a class="navbar-brand baradjust" href="#">KSB</a>
        <span class="fs-6 baradjust d-none d-sm-block">歡迎來到卡司比報名網。
        </span>

        {{--
        測試用session
        ! 記得要刪除
        --}}
        @php
        // session(['mySessionVariable' => 'Hello, Marcus!']);
        @endphp

        @if(session()->has('mySessionVariable'))
        <span class="fs-6">{{ session('mySessionVariable') }}
        </span>

        @else

        {{-- login --}}
        <button class="baradjust login_button fw-900 d-none d-sm-block" type="button" data-bs-toggle="modal"
            data-bs-target="#loginModal"><u>Login</u></button>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title col-4 text-start">會員登入</h5>
                        <h6 class="modal-title col-6 text-start" style="color: red">若尚未有帳號請先加入會員</h6>
                        <button type="button" class="btn-close col-2" data-bs-dismiss="modal"
                            aria-label="Close"></button>

                    </div>
                    {{-- login form --}}
                    <form>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="login-name" class="col-2 col-form-label col-form-label-sm">E-mail:</label>
                                <div class="col-8">
                                    <input type="email" id="login-name" class="form-control form-control-sm"
                                        placeholder="name@example.com" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="login-password"
                                    class="col-2 col-form-label col-form-label-sm">Password:</label>
                                <div class="col-4"><input type="password" class="form-control form-control-sm"
                                        id="login-password" required></div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">登入</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="123"
                                    style="color: white;text-decoration: none;">加入會員</a></button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="123"
                                    style="color: white;text-decoration: none;">忘記密碼</a></button>
                        </div>
                    </form>
                    {{-- login form end--}}
                </div>
            </div>
        </div>
        {{-- login end --}}
        @endif

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            {{-- member存在的導覽列 --}}
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-block d-sm-none"
                style="--bs-scroll-height: 100px;">
                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Link</a>
                </li>
            </ul>
            {{-- member存在的導覽列 end--}}
        </div>
    </div>
</nav>