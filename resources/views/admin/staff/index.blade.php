@extends('template.layout')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
@endpush

@section('title', 'Staff C&P')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Data Staff C&P</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('staff.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data Staff
                        C&P</a>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Role</th>
                                <th width="200">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <a href="{{ route('staff.edit', $item) }}" class="btn bg-teal">
                                            <i class="nav-icon far fa-edit text-md"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('staff.destroy', $item) }}" method="post" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Data is Empty</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection


@push('js')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                responsive: true,
                autoWidth: false,
            });
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
@endpush
