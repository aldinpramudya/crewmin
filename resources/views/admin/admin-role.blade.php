@extends('admin.admin-layouts.base')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Role</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Halaman Role</li>
                </ol>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="{{ route('admin-role-create') }}">
                    <button type="button" class="btn btn-primary" href=""><i class="bi bi-plus-lg"></i> Tambah Role
                    </button>
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
                                <th>No</th>
                                <th>Role</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('admin-role-edit', $role->id) }}">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>
                                                Edit</button>
                                        </a>
                                        <button class="btn btn-danger" onclick="deleteRoles({{ $role->id }})"><i class="bi bi-trash"></i>Hapus</button>
                                        {{-- <form action="{{ route('admin-role-delete', $role->id) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>
                                                Delete</button>
                                        </form> --}}
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

@push('scripts')
    <script>
        function deleteRoles(roleId) {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Anda Tidak Dapat Mengembalikan Data Yang Sudah Dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send delete request to server
                    fetch(`/admin/role/delete/${roleId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    }).then(response => {
                        if (response.ok) {
                            Swal.fire(
                                'Dihapus!',
                                'Role Sudah Dihapus.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire(
                                'Gagal!',
                                'Role Tidak Dapat Dihapus.',
                                'error'
                            );
                        }
                    });
                }
            })
        }
    </script>
@endpush
