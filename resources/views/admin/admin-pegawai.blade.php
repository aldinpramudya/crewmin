@extends('admin.admin-layouts.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Pegawai</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Halaman Pegawai</li>
                </ol>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="{{route('admin-pegawai-create')}}">
                    <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Pegawai </button>
                </a>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th>Edit Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $pegawai)
                            <tr>
                                <td>{{$pegawai->role->name}}</td>
                                <td>{{$pegawai->name}}</td>
                                <td>{{$pegawai->email}}</td>
                                <td>{{$pegawai->address}}</td>
                                <td>{{$pegawai->no_telp}}</td>
                                <td>
                                    <a href="{{route('admin-pegawai-edit', $pegawai->id)}}">
                                        <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>
                                            Edit</button>
                                    </a>
                                    <form action="{{route('admin-pegawai-delete', $pegawai->id)}}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
