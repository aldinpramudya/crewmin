@extends('admin.admin-layouts.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Role</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Edit Role</li>
                </ol>
            </div>
        </div>
    </div>
    <form action="{{ route('admin-role-update', $role->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Role</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}">
                        </div>
                        <a href="{{ route('admin-role') }}">
                            <button type="button" class="btn btn-danger">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </form>
@endsection
