@extends('layout.app')
@section('title')
最新消息
@endsection
@section('page')
<style>
    .list-group-item {
        background-color: transparent;
    }

    .list-group-item .btn-primary {
        background-color: transparent;
    }
</style>

<h5 style="margin-top: 10vh;">最新消息</h5>

<ul class="list-group m-5">
    @foreach ($newsData as $item )
    {{--
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#" class="text-start">{{$item['title']}}</a>
        <span class="badge bg-primary rounded-pill">{{$item['releaseDate']}}</span>
    </li> --}}
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new{{$item['id']}}">
            {{$item['title']}}
        </button>

        <!-- Modal -->
        <div class="modal fade" id="new{{$item['id']}}" tabindex="-1" aria-labelledby="new{{$item['id']}}ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new{{$item['id']}}ModalLabel">{{$item['title']}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{$item['text']}}
                    </div>

                </div>
            </div>
        </div>
        <!-- Modalend -->
        <span class="badge bg-primary rounded-pill">{{$item['releaseDate']}}</span>
    </li>

    @endforeach
</ul>



@endsection