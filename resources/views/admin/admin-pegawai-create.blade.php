@extends('admin.admin-layouts.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Pegawai</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Tambah Pegawai</li>
                </ol>
            </div>
        </div>
    </div>
    <form action="{{ route('admin-pegawai-store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="id_role" class="form-label">Role</label>
                            <select class="form-select" id="id_role" name="id_role">
                                <option selected>Pilih Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <a href="{{ route('admin-pegawai') }}">
                            <button type="button" class="btn btn-danger">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div> <!-- end col -->
            
    </form>
@endsection
