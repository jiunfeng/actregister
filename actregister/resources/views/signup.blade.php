@extends('layout.app')
@section('title')
線上報名
@endsection
@section('page')
{{-- row-cols-數字 表示每個row可以有多少col --}}
<div class="row row-cols-1 row-cols-md-3 mb-3 mt-5 text-center">
    @foreach ($data as $item)

    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$item->ordername}}</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">報名費{{$item->price}}<small class="text-muted fw-light"></small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>報名期間:{{$item->startTime}}~{{$item->endTime}}</li>


                </ul>
                <form action="{{route('signupGame')}}" method="POST">
                    @csrf
                    <input type="hidden" name="gameId" id="gameId" value="{{$item->id}}">
                    <input type="hidden" name="ordername" id="ordername" value="{{$item->ordername}}">
                    @if (auth()->check())
                    <input type="hidden" name="userId" id="userId" value="{{auth()->user()->id}}">


                    <button type="submit" class="w-100 btn btn-lg btn-primary">立即報名</button>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                        data-bs-target="#signupModal">
                        立即報名
                    </button>

                    <!-- Modal -->
                    <div class="modal fade modal-sm" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    請先登入會員
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" onclick="location.href='{{route('members.loginlayout')}}'"
                                        class="btn btn-primary">立即登入</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
@section('scripts')

{{-- 報名成功彈出訊息 --}}
@if(session('signup_status'))
<!-- 彈出 Bootstrap Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">通知</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('signup_message') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>


    <!-- 啟動 Modal 的 JavaScript 代碼 -->
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('signupModal'));
        myModal.show();
    </script>
    @endif
</div>
@endsection