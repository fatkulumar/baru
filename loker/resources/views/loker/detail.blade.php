@extends('layouts.app')
@section('content')
    @foreach ($lokers as $loker)
    <div class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="card-body alert alert-danger">
                <h1 style="font-weight:bolder; line-height:12px">{{ $loker->judul }}</h3>
                <h5 style="color: #000">{{ $loker->perusahaan }}</h5>

                <p>
                    {{ $loker->loker }}
                </p>
                    {{-- {{ str_limit($post->content, 100, '...') }} --}}
                <ul>
                    <li>{{ $loker->alamat }}</li>
                    <li>{{ $loker->email }}</li>
                    <li>{{ $loker->hp }}</li>
                    <li>{{ $loker->exp }}</li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach

        <div>
                @include('loker.footer')
        </div>
@endsection
