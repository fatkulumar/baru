@extends('layouts.app')
@section('content')
        <div class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="card-body alert alert-success" role="alert">
                <div style="position:absolute">
                        {{ $p->links() }}
                </div>
                <div style="position:relative; left:1040px">
                    {{--  <form action="" method="post">  --}}
                        <label for="tgl">Expired : </label>
                        <select name="tgl" id="tgl">
                            <option value="">-- Tanggal --</option>
                        </select>
                        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                    </form>
                </div>
            </div>
        </div>

    @foreach ($p as $loker)
    <div class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="card-body alert alert-danger">
                    <a href="{{ route('loker.detail', ['id' => $loker->id]) }}" target="_blank"><h1 style="font-weight:bolder; line-height:15px">{{ $loker->judul }}</h3></a>
                        <h5>{{ $loker->perusahaan }}</h5>
                    <p>
                        {{ $loker->loker }}
                    </p>

                    <ul>
                        <li>Expired : {{ $loker->exp }}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

        <div>
                @include('loker.footer')
        </div>
@endsection
