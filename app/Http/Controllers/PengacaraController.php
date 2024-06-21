<?php

namespace App\Http\Controllers;

use App\Models\Pengacara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PengacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.pengacara',[
            'pengacaras' => Pengacara::get(),
        ]);
    }

    public function indexadmin()
    {
        return view('admin.pages.pengacara.index',
        [
            'p' => Pengacara::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.pengacara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:15',
            'gelar' => 'required|max:15',
            'deskripsi' => 'required',
            'foto' => 'image',

        ]);
        $foto = null;
        if ($request->hasFile('foto')){
            $foto = $request->file('foto')->store('foto');
        }

        $pengacara = new Pengacara;
        $pengacara->nama = $request->nama;
        $pengacara->gelar = $request->gelar;
        $pengacara->deskripsi = $request->deskripsi;
        $pengacara->foto = $foto;
        $pengacara->save();

        return redirect()->route('pengacara.indexadmin')->with('sukses', 'Berhasil di Tambah ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengacara = Pengacara::find($id);
        return view('admin.pages.pengacara.edit',
    [
        'pengacara' => $pengacara,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:15',
            'gelar' => 'required|max:15',
            'deskripsi' => 'required',
            'foto' => 'image',

        ]);
    $pengacara = Pengacara::find($id);
    
    $foto = $pengacara->foto;

    if($request->hasFile('foto')){
        $foto = $request->file('foto')->store('foto', 'public');
        
        if($pengacara->foto && Storage::disk('public')->exists($pengacara->foto)){
            Storage::disk('public')->delete($pengacara->foto);
        }
    }
    $pengacara->nama = $request->nama;
    $pengacara->gelar = $request->gelar;
    $pengacara->deskripsi = $request->deskripsi;
    $pengacara->foto = $foto;
    $pengacara->save();
        return redirect()->route('pengacara.indexadmin')->with('sukses', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengacara = Pengacara::find($id);

        if ($pengacara->foto){
            Storage::delete($pengacara->foto);
        }

        $pengacara->delete();
        return redirect()->route('pengacara.indexadmin')->with('hapus', 'Berhasil di Hapus');
    }
}
