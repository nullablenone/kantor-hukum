@extends('admin.layouts.layouts')

@section('content')
    <div class="row">
        <div class="container" id="img_size ms-auto ">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Pengacara</h4>
                        <p class="card-description">
                            <a href="{{ route('pengacara.create') }}">+ Tambah Pengacara</a>
                        </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Gelar</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p as $pengacara)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $pengacara->foto) }}" alt=""
                                                    class="size">
                                            </td>

                                            <td> {{ $pengacara->nama }} </td>
                                            <td> {{ $pengacara->gelar }} </td>
                                            <td>{{ $pengacara->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('pengacara.edit', $pengacara->id) }}"
                                                        class="btn btn-success btn-sm btn-icon-text mr-3">Edit</a>
                                                    <form action="{{ route('pengacara.destroy', $pengacara->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="delete"
                                                            class="btn btn-danger btn-sm btn-icon-text">
                                                    </form>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
