@extends('admin.layouts.layouts')

@section('content')
    <div class="row">
        <div class="container" id="img_size ms-auto ">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Layanan</h4>
                        <p class="card-description">
                            <a href="{{ route('layanan.create') }}">+ Tambah Layanan</a>
                        </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanans as $layanan)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $layanan->foto) }}" alt="" class="size">
                                            </td>

                                            <td> {{ $layanan->judul }} </td>
                                            <td>{{ $layanan->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('layanan.edit', $layanan->id) }}"
                                                        class="btn btn-success btn-sm btn-icon-text mr-3">Edit</a>
                                                    <form action="{{ route('layanan.destroy', $layanan->id) }}"
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
