<style>
    .mainbar .btn {
        background-image: url('{{asset("img/mainbra_button.png")}}');
        background-size: cover;
        /* 以 cover 值自動縮放背景圖片以填滿整個元素 */
        background-position: center center;
        /* 將背景圖片置中 */
        background-repeat: no-repeat;
        /* 防止背景圖片重複 */
        width: 120px;
        color: aliceblue;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mainbar {
        background-image: url('{{asset("img/mainbar_gc_1.jpeg")}}');
        background-size: cover;
        background-repeat: repeat;
        background-position: center center;
    }
</style>
<div class="mainbar d-none d-sm-block text-center">
    <button type="button" class="btn"><a href="{{route('news')}}">首頁</a></button>
    <button type="button" class="btn"><a href="{{route('news')}}">最新消息</a></button>
    <button type="button" class="btn"><a href="{{route('announcements')}}">賽事公告</a></button>
    <button type="button" class="btn"><a href="{{route('signup')}}">線上報名</a></button>
    <button type="button" class="btn"><a href="{{route('membercenter')}}">會員中心</a></button>
    <button type="button" class="btn"><a href="{{route('questionsanswers')}}">Ｑ＆Ａ</a></button>
    <button type="button" class="btn"><a href="{{route('contactus')}}">聯絡我們</a></button>
</div>
