@extends('layouts.app')
@section('content')
    <div class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="card-body alert alert-success" role="alert">
            <div style="position:absolute">
                    {{ $lokers->links() }}
            </div>
            <div style="position:relative; left:1040px">
                {{--  <form action="" method="post">  --}}
                    <label for="tgl">Expired : </label>
                    <select name="tgl" id="tgl">
                        <option value="">-- Tanggal --</option>
                    </select>
                    <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                </form>
                <br>
                {{-- <input type="text" name="submit"  id="submit">input --}}
            </div>
        </div>
    </div>

    @foreach ($lokers as $loker)
        <div class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="card-body alert alert-danger">
                    <div style="position: relative; margin-left:999px">
                        <a class="btn-danger btn-sm" href="{{ route('loker.destroy', $loker->id) }}">Hapus</a>
                    </div>
                    <div style="position: absolute; margin-left:999px">
                        <a class="btn-primary btn-sm" href="{{ route('loker.edit', $loker->id) }}">Edit</a>
                    </div>
                    <a href="{{ route('loker.detail', $loker->id) }}" target="_blank"><h1 style="font-weight:bolder; line-height:30px;">{{$loker->judul}}</h1></a>
                    <h5 style="color: #000; border-style: dotted; border-color: #98bf21">{{ $loker->perusahaan }}</h5>
                    <p style="text-indent :25px;">
                        {{ $loker->alamat }} || {{ $loker->email }}
                    </p>
                    <p style=" border-style: double; border-color: #0000FF">
                       {{ $loker->loker }}
                       {{-- {{ str_limit($post->content, 100, '...') }} --}}
                    </p>
                </div>
                <div id="result">

                </div>
            </div>
        </div>
    @endforeach

        <div>
                @include('loker.footer')
        </div>
@endsection
<script>
            {{--  $(document).ready(function(){  --}}

                function submit(){

                   var judul=$("#submit").val();

                    if(judul!=""){
                        $("#result").html("<h1>Berhasil</h1>");
                          $.ajax({
                              type:"POST",
                              url:"route('loker.cari')",
                              data:"judul="+judul,
                              success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                              }
                          });
                    }
                }

                $("#button").click(function(){
                    submit();
                });

                $('#search').keyup(function(e) {
                    if(e.keyCode == 13) {
                       submit();
                    }
                });
            {{--  });  --}}
</script>
