@extends('admin.admin-layouts.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Halaman Admin</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Selamat Datang Di Halaman Admin Crewmin</li>
                </ol>
            </div>
        </div>
    </div>
    {{-- Card --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('admin-pegawai') }}">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="bi bi-people fs-1 text-white"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Pegawai</h5>
                            <h4 class="fw-medium font-size-24 text-white"> {{ $totalPegawai }}</h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('admin-role') }}">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="bi bi-person-square fs-1 text-white"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Role</h5>
                            <h4 class="fw-medium font-size-24 text-white"> {{ $totalRole }}</h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-end">
                                <a href="#" class="text-white-50"><i class="bi bi-arrow-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    {{-- End Card --}}
@endsection
