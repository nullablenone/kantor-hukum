@extends('admin.layouts.layouts')
@section('title', 'Layanan')

@section('content')


    <x-form-group>
        <x-form-input label="Nama" name="nama" type="text" placeholder="dd"/>
        <x-form-input label="Deskripsi" name="deskripsi" type="textarea" placeholde="ajajajajaj" />
        <x-form-input label="foto" name="foto" type="image"placeholder="ff" />
    </x-form-group>





@endsection
