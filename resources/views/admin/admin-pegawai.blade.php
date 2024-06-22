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
                <button type="button" onclick="create()" class="btn btn-primary" ><i
                        class="bi bi-plus-lg"></i> Tambah Pegawai </button>
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="{">
                                        <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>
                                            Edit</button>
                                    </a>
                                    <form action="" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pegawai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pegawai-js')
    <script>
        function create() {
            $.get("{{url('admin/pegawai/create')}}",{}, function(data,status){
                $('#page').html(data);
                $('#exampleModal').modal('show');
            });
        }
    </script>
@endsection
