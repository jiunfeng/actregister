<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS BS --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/colors_fronts.css')}}">
    @yield('head')
    {{-- 其他模板套用時更換title --}}
    <title>@hasSection ('title')
        @yield('title')
        @else
        Home
        @endif</title>
</head>

<style>
    /* 開發途中使用 用來確認框架範圍 後續要拿掉 */
    body {
        text-align: center;
    }

    div[class|="col"] {
        background-color: var(--mc04);
        border: 0.5px solid purple;
        text-align: center;
    }

    /* 輪播高度自適應 */
    .d-block {
        height: 50vh;
    }

    .carousel div[class|="col"] {
        background-image: url("{{asset('img/carousel_bg.jpg')}}");
        padding: 10px;
        margin-top: 50px;


    }


    .memberformtitle {
        color: #e5793b;
        margin-top: 50px;
        margin-bottom: 10px;
        border-bottom: 3px dashed #999;
        font-size: 3vh;
    }

    .memberform .row {
        padding: 5px;
        color: white;
        text-align: left;

    }

    .memberform .btn {
        margin-top: 20px;
    }

    .memberform .error {
        color: red;
    }
</style>


<body>
    <div class="container-fluid">
        <div class="row topbar">
            <div class="col-2"></div>
            <div class="col-8 " style="padding: 0;">
                @include('layout.memberbar')
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row carousel">
            <div class="col-2 d-none d-md-block"></div>
            <div class="col-8 d-none d-md-block">
                @include('layout.carousel')
            </div>
            <div class="col-2 d-none d-md-block"></div>
        </div>
        <div class="row mainbar">
            <div class="col">
                @include('layout.mainbar')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row context">
            <div class="col-3 context_sidebar">
                <div class="container">
                    <div class="row sidebar01">
                        <div class="col">
                            <img src="https://fakeimg.pl/200x150/200" alt="">
                            <img src="https://fakeimg.pl/200x150/200" alt="">
                            <img src="https://fakeimg.pl/200x150/200" alt="">

                        </div>

                    </div>
                    <div class="row sidebar02">
                        <div class="col">
                            <h3>其他服務</h3>
                            <br><br>
                            <p>sidebar02</p>
                            <br><br>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-9 context_main">
                @yield('page')
            </div>
        </div>
        <div class="row footer">
            <div class="col-12">
                <br><br><br>
                <p>頁尾</p>
                <br><br><br>
            </div>
        </div>
    </div>

</body>

@yield('scripts')


</html>