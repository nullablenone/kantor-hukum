<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            'judul' => 'required|max:10',
            'deskripsi' => 'required|max:20',
        ]);

        $layanan = new Layanan;
        $layanan->judul = $request->judul;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();

        return redirect()->route('layanan.indexadmin');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
