@extends('template.layout')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
@endpush

@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data
                        Mahasiswa</a>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th width="250">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $data)
                                <tr>
                                    <td>{{ $data['nim'] }}</td>
                                    <td>{{ $data['nama'] }}</td>
                                    <td>{{ $data['jurusan'] }}</td>
                                    <td>
                                        <a href="{{ route('mahasiswa.show', $data) }}" class="btn btn-info">
                                            <i class="nav-icon far fa-file-alt text-md"></i>
                                            Berkas
                                        </a>
                                        <a href="{{ route('mahasiswa.edit', $data) }}" class="btn bg-teal">
                                            <i class="nav-icon far fa-edit text-md"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $data) }}" method="post" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
