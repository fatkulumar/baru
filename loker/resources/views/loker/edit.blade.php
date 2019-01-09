@extends('layouts.app')

@section('content')
@foreach ($lokers as $loker)


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <strong><div style="font-size:22px" class="card-header">{{ __('Edit Loker') }}</div></strong>

                <div class="card-body">
                    <form method="POST" action="" autocomplete="on">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                        <div class="form-group row">
                            {{--  <label for="id_user" class="col-md-2 col-form-label text-md-right">{{ __('ID User') }}</label>  --}}

                            <div class="col-md-9">
                                <input id="id_user" type="hidden" class="form-control" name="id_user" value="{{ session('id') }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-9">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $loker->judul }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perusahaan" class="col-md-2 col-form-label text-md-right">{{ __('Perusahaan') }}</label>

                            <div class="col-md-9">
                                <input id="perusahaan" type="text" class="form-control" name="perusahaan" value="{{ $loker->perusahaan }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-9">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $loker->alamat }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $loker->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hp" class="col-md-2 col-form-label text-md-right">{{ __('HP') }}</label>

                            <div class="col-md-9">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ $loker->hp }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exp" class="col-md-2 col-form-label text-md-right">{{ __('Expired') }}</label>

                            <div class="col-md-9">
                                <input id="exp" type="text" class="form-control" name="exp" value="{{ $loker->exp }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="loker" class="col-md-2 col-form-label text-md-right">{{ __('Lowongan') }}</label>

                            <div class="col-md-9">
                                <textarea id="loker" type="text" class="form-control" name="loker" required>{{ $loker->loker }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-9 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
<div style="margin-top:0px">
    @include('loker.footer')
</div>
@endsection
