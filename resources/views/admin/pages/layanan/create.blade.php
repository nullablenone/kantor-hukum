@extends('admin.layouts.layouts')

@section('content')
    <form action="{{ route('layanan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="">Judul </label>
                            <input type="text"
                                class="form-control 
                        @error('judul')
                            is-invalid
                        @enderror"
                                id="" placeholder="" name="judul" value="{{ old('judul') }}" autocomplete="off">
                            @error('judul')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10"
                                class="form-control 
                             @error('deskripsi')
                            is-invalid
                        @enderror"></textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
