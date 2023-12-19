@extends('layout.app')
@section('title')
聯絡我們
@endsection
@section('page')
<div class="container">
    <div class="row m-5">
        <div class="col p-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20593.991258129754!2d120.63055487237008!3d24.152867730841834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dec4ca3a271%3A0xd8b5a337271e60e2!2z6Ie65Lit5ZyL5a625q2M5YqH6Zmi!5e0!3m2!1szh-TW!2stw!4v1702945295777!5m2!1szh-TW!2stw"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col p-3 text-start m-5">

            <h3>到達協會交通方式</h2><br>
                <h5>開車:74號快速道路市政路下
                </h5>
                <h5>公車:345 74 12(國家歌劇院下)</h5>
                <h5>公路車:台灣大道一條龍</h5>

        </div>

    </div>

    <form action="{{route('contactusSend')}}" method="POST" class="row m-5 flex-column align-items-start">
        @csrf
        <div class="mb-1 col-12 text-center" style="color: red">
            <h3>如有任何相關問題歡迎來信</h3>
        </div>

        <div class="mb-1 col-5">
            <label for="emailtitle" class="form-label col-form-label">信件標題</label>
            <input type="text" class="form-control" name="emailtitle" id="emailtitle" placeholder="title" required>
        </div>
        <div class="mb-1 col-5">
            <label for="emailuser" class="form-label col-form-label">Email</label>
            <input type="email" class="form-control" id="emailuser" name="emailuser" placeholder="name@example.com"
                required>
        </div>
        <div class="mb-1 col-10">
            <label for="emailtext" class="form-label">信件內容</label>
            <textarea class="form-control" name="emailtext" id="emailtext" rows="5" required></textarea>
        </div>
        <div class="mb-3 mt-2 col-4 align-self-center">
            <button type="submit" class="btn btn-primary">送出</button>
        </div>


    </form>

    @if(session('success'))
    <!-- 彈出 Bootstrap Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 啟動 Modal 的 JavaScript 代碼 -->
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('successModal'));
        myModal.show();
    </script>
    @endif
    @endsection
