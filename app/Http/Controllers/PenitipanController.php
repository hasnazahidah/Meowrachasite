<?php

namespace App\Http\Controllers;


use App\Models\Penitipan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penitipan = Penitipan::select('id', 'tanggal_titip', 'tanggal_checkout', 'lama_titip', 'layanan', 'antar_jemput')->latest()->paginate(10);
        return view('admin/penitipan/index', compact('penitipan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/penitipan/create');
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
            'tanggal_titip' => 'required',
            'tanggal_checkout' => 'required',
            'lama_titip' => 'required',
            'layanan' => 'required',
            'antar_jemput' => 'required',
        ]);

        Penitipan::create([
            'tanggal_titip' => Str::title($request->tanggal_titip),
            'tanggal_checkout' => Str::title($request->tanggal_checkout),
            'lama_titip' => Str::title($request->lama_titip),
            'layanan' => Str::title($request->layanan),
            'antar_jemput' => Str::title($request->antar_jemput)
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil ditambahkan
            </div>
        ');
        
        return redirect('/penitipan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penitipan = Penitipan::select('id', 'tanggal_titip', 'tanggal_checkout', 'lama_titip', 'layanan', 'antar_jemput')->whereId($id)->firstOrFail();
        return view('admin/penitipan/edit', compact('penitipan'));
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
            'tanggal_titip' => 'required',
            'tanggal_checkout' => 'required',
            'lama_titip' => 'required',
            'layanan' => 'required',
            'antar_jemput' => 'required',
        ]);

        Penitipan::whereId($id)->update([
            'tanggal_titip' => Str::title($request->tanggal_titip),
            'tanggal_checkout' => Str::title($request->tanggal_checkout),
            'lama_titip' => Str::title($request->lama_titip),
            'layanan' => Str::title($request->layanan),
            'antar_jemput' => Str::title($request->antar_jemput)
        ]);

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
        ');
        return redirect('/penitipan');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penitipan::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/penitipan');
    }
}
