@extends('layouts.base')
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Crewmin</h1>
                    <hr class="divider"/>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Kelola Crew Anda!</p>
                    <a class="btn btn-primary btn-xl" href="{{route('admin')}}">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Selamat Datang di Crewmin!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Crewmin adalah layanan manajemen pegawai yang membantu anda untuk mengelola pegawai anda untuk mencapai efisiensi yang diinginkan </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Rekap</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Jumlah Pegawai</h3>
                        <h3 class="text mb-0">{{ $totalPegawai }}</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-person-square fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Jumlah Role</h3>
                        <h3 class="text mb-0"> {{ $totalRole }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>    
@endsection
