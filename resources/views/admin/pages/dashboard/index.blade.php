@extends('admin.layouts.layouts')
@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang Sobat </h3>
                        <h6 class="font-weight-normal mb-0">Semua Sistem Berjalan Dengan Lancar  <span
                                class="text-primary">Semangat Bekerja !</span></h6>
                        {{-- <h6 class="font-weight-normal mb-0">Semua Sistem Berjalan Dengan Lancar ! <span
                                class="text-primary">3 unread alerts!</span></h6> --}}
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('images/people.svg') }}" alt="people">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Layanan</p>
                                <p class="fs-30 mb-2">{{ $layanan }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Pengacara</p>
                                <p class="fs-30 mb-2">{{ $pengacara }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Artikel</p>
                                <p class="fs-30 mb-2">75</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Total Pengguna</p>
                                <p class="fs-30 mb-2">47</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
