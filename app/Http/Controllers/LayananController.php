<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.layanan',[
            'layanans' => Layanan::get(),
        ]);
    }

    public function indexadmin()
    {
        return view('admin.pages.layanan.index',
    [
        'layanans' => Layanan::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:15',
            'deskripsi' => 'required',
            'foto' => 'image',

        ]);

        $foto = null;
        if ($request->hasFile('foto')){
            $foto = $request->file('foto')->store('foto');
        }

        $layanan = new Layanan;
        $layanan->judul = $request->judul;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->foto = $foto;
        $layanan->save();
        

        
        return redirect()->route('layanan.indexadmin')->with('sukses', 'Berhasil di Tambah ');

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
        $layanan = Layanan::find($id);
        return view('admin.pages.layanan.edit',
    [
        'layanan' => $layanan,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|max:15',
            'deskripsi' => 'required',
            'foto' => 'image',]);
    $layanan = Layanan::find($id);
    
    $foto = $layanan->foto;

    if($request->hasFile('foto')){
        $foto = $request->file('foto')->store('foto', 'public');
        
        if($layanan->foto && Storage::disk('public')->exists($layanan->foto)){
            Storage::disk('public')->delete($layanan->foto);
        }
    }
    $layanan->judul = $request->judul;
    $layanan->deskripsi = $request->deskripsi;
    $layanan->foto = $foto;
    $layanan->save();
        return redirect()->route('layanan.indexadmin')->with('sukses', 'Update Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Layanan::find($id);
        if ($layanan->foto){
            Storage::delete($layanan->foto);
        }
        $layanan->delete();
        return redirect()->route('layanan.indexadmin')->with('hapus', 'Berhasil di Hapus');
    }
}
