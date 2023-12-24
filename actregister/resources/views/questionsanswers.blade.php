@extends('layout.app')
@section('title')
Ｑ＆Ａ
@endsection
@section('page')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <h1 style="letter-spacing: 15px;">Q&A</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="accordion" id="accordions">
                @foreach ($qaData as $data)

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $loop->iteration }}">
                            <div style="color: red">Q{{ $loop->iteration }}:</div>
                            {{$data->title}} Item
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $loop->iteration }}" data-bs-parent="#accordions">
                        <div class="accordion-body">{{$data->text}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
