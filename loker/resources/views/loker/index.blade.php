@extends('layouts.app')

@section('content')
    <div class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="card-body alert alert-success" role="alert">
                <center><strong><ol>Tempat Terbaik Mencari Lowongan Pekerjaan Daerah Ngawi</ol></strong></center>
        </div>
    </div>

    <div class="navbar navbar-expand-md navbar-light navbar-laravel" style="position: absolute">
            <img style="width : 1315px; height:500px" src="assets/loker.jpg" alt="">
    </div>

    <div style="position:relative; margin-top:250px ">
        <center><a class="btn btn-danger" href="{{ route('loker.lokers') }}">{{ __('Cari Pekerjaan') }}</a></center>
    </div>

    <div style="margin-top:220px">
        @include('loker.footer')
    </div>
@endsection



