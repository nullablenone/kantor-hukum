@extends('admin.layouts.layouts')
@section('title', 'Layanan-create')

@section('content')


    <form class="min-h-screen p-6 bg-gray-100 flex items-center justify-center" method="POST" action="{{ route('layanan.update', $layanan->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg font-bold">Tambah</p>
                            <p>Silahkan Masukan Layanan Baru</p>
                        </div>


                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="masukan judul layanan" autocomplete="on"
                                        value="{{ $layanan->judul }}" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="4" cols="50"
                                        class=" border mt-1 rounded px-4 w-full bg-gray-50" type="text" placeholder="masukan deskripsi"
                                        autocomplete="off">{{ $layanan->deskripsi }}</textarea>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" id="foto"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 mb-2" value=""
                                        autocomplete="off" />
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </from>






    @endsection
