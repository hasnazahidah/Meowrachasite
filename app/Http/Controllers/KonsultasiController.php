<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::select('id', 'nama_konsultan')->latest()->paginate(10);
        return view('admin/konsultasi/index', compact('konsultasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/konsultasi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_konsultan' => 'required'
        ]);

        Konsultasi::create([
            
            'nama_konsultan' => $request->nama_konsultan
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        return redirect('/konsultasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $konsultasi = konsultasi::select('id', 'nama_konsultan')->whereId($id)->firstOrFail();
        return view('admin/konsultasi/show', compact('konsultasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $konsultasi = konsultasi::select('id', 'nama_konsultan')->whereId($id)->firstOrFail();
        return view('admin/konsultasi/edit', compact('konsultasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_konsultan' => 'required'
        ]);

        $data = [
            'nama_konsultan' => $request->nama_konsultan
        ];

        

        $konsultasi->update($data);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/konsultasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Konsultasi::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/konsultasi');
    }
}
