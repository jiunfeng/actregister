<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS BS --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('scss/_navbar.scss')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/colors_fronts.css')}}">
    {{-- 其他模板套用時更換title --}}
    <title>@hasSection ('title')
        @yield('title')
        @else
        Home
        @endif</title>
</head>

<style>
    /* 開發途中使用 用來確認框架範圍 後續要拿掉 */
    div[class|="col"] {
        background-color: #ebdef0;
        border: 0.5px solid purple;
        text-align: center;
    }

    .container .topbar {}
</style>

<body>
    <div class="container-fluid">
        <div class="row topbar">
            <div class="col">
                @include('layout.memberbar')
            </div>
        </div>
        <div class="row carousel">
            <div class="col">
                <img src="https://fakeimg.pl/1024x400/C00CCC" alt="幻燈片">
                <p>幻燈片</p>
            </div>
        </div>
    </div>
    <div class="container">


        <div class="row mainbar">
            <div class="col">
                <p>main bar</p>
            </div>
        </div>
        <div class="row context">
            <div class="col-3 context_sidebar">
                <div class="container">
                    <div class="row sidebar01">
                        <div class="col">
                            <br><br>
                            <p>sidebar01</p>
                            <br><br>
                        </div>

                    </div>
                    <div class="row sidebar02">
                        <div class="col">
                            <br><br>
                            <p>sidebar02</p>
                            <br><br>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-9 context_main">
                <br><br><br><br><br>
                <p>主要資訊</p>
                <br><br><br><br>
            </div>
        </div>
        <div class="row footer">
            <div class="col">
                <br><br><br>
                <p>頁尾</p>
                <br><br><br>
            </div>
        </div>
    </div>

</body>

</html>
