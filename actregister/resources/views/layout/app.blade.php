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
    /* body {
        text-align: center;
    } */

    /* div[class|="col"] {
        background-color: var(--mc04);
        border: 0.5px solid purple;
        text-align: center;
    } */

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

    .footer .col-12 {
        background-color: black;
        color: white;
    }

    .context_sidebar {
        background-image: url("{{asset('img/sidebarbg1.png')}}");
        background-size: cover;
        /* 透明度 已修圖 使用此屬性會使容器整個都透明*/
        /* opacity: 0.5; */
    }

    .page-area {
        /* 漸層色調整上到下 */
        background: linear-gradient(to bottom, #999, #57758d);

    }
</style>

{{-- --}}

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
            <div class="col-8 d-none d-md-block ">
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
    <div class="container fs-md-1">
        <div class="row context">
            <div class="col-3 context_sidebar d-none d-sm-block">
                <div class="container">
                    <div class="row sidebar01">
                        <div class="col mt-5">
                            <a href="https://www.sportmania.asia/categories/%E8%87%AA%E8%A1%8C%E8%BB%8Abikes">
                                <img src="{{ asset('img/logo/trek.png') }}" alt="" class="img-fluid mb-5">
                            </a>
                            <a href="https://www.colnago.com/bikes/road-bike/">
                                <img src="{{ asset('img/logo/colnago.png') }}" alt="" class="img-fluid mb-5">
                            </a>
                            <a href="https://www.scottusa.com.tw/">
                                <img src="{{ asset('img/logo/scott.png') }}" alt="" class="img-fluid mb-5">
                            </a>
                        </div>

                    </div>
                    <div class="row sidebar02">
                        <div class="col">
                            <h3 class="text-center ps-0 ">其他服務</h3>
                            <ul class="text-start">
                                <li>團報申請單</li>
                                <li>家長同意書</li>
                                <li>意外險申請表單</li>
                            </ul>

                        </div>



                    </div>
                </div>
            </div>
            <div class="col page-area">
                @yield('page')
            </div>
        </div>
        <div class="row footer">
            <div class="col-12 fs-6">
                <div class="row justify-content-between">
                    <div class="col-6 mt-1 text-start">402 台中市南區工學八十七街1688巷987號<br>
                        上班時間：週一 10:00 am〜11:00 am <br>
                        TEL：886 - 4 - 2987-1688 ； FAX：886 - 4 - 2287-1687 <br>
                        客服信箱：ksb@ksbbike.org <br>
                        退費信箱：service@twbike.org</div>
                    <div class="col-5 mt-1 text-end">© 2023 Kaka Super Bike <br>卡司比超級自行車. <br> All Rights Reserved.
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

@yield('scripts')


</html>