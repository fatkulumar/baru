<?php

namespace App\Http\Controllers;

use App\User;
use App\loker;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lokers = Loker::create($request->all());
        return redirect()->route('loker.lokerku')->withInfo('Post Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show(loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit(loker $loker)
    {
        $lokers = Loker::find($loker);
        return view('loker.edit', ['lokers' => $lokers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loker $loker)
    {
        $loker->update([
            'id_user' => request('id_user'),
            'judul' => request('judul'),
            'perusahaan' => request('perusahaan'),
            'alamat' => request('alamat'),
            'email' => request('email'),
            'hp' => request('hp'),
            'exp' => request('exp'),
        ]);
        return redirect()->route('loker.lokerku')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy(loker $loker)
    {
        $loker->delete();
        return redirect()->route('loker.lokerku')->with('alert-success','Data berhasil diubah!');
    }

    public function lokerku(Request $request)
    {
        $idd = $request->session()->get('id');
        $lokers = DB::table('lokers')->where('id_user', $idd)->paginate(env('PER_PAGE'));
        // $p = Loker::latest()->paginate(env('PER_PAGE'));
        return view('loker.lokerku' , ['lokers' => $lokers]);
    }

    public function lokers()
    {
        $p = Loker::latest()->paginate(env('PER_PAGE'));
        return view('loker.lokers', ['p' => $p]);
    }

    public function detail(loker $loker)
    {
        $lokers = Loker::find($loker);
        return view('loker.detail', ['lokers' => $lokers]);
    }

    public function cari()
    {
        return "hay";
    }
}
