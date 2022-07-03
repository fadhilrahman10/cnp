@extends('template.layout')

@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $id) }}" method="POST" >
                        @csrf @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="number" class="form-control" id="nim" value="{{ $nim }}" name="nim"
                                    placeholder="Enter Nomor Induk Mahasiswa" />
                            </div>

                            {{-- <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" />
                            </div> --}}
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" value="{{ $email }}" class="form-control" id="email" name="email"
                                    placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="no-telp">No. Telp</label>
                                <input type="text" class="form-control" value="{{ $no_hp }}" id="no-telp" name="no_hp"
                                    placeholder="Enter no-telp" />
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" value="{{ $jurusan }}" id="jurusan" name="jurusan"
                                    placeholder="Enter jurusan" />
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" value="{{ $alamat }}" name="alamat"
                                        placeholder="Enter alamat" />
                                </div>
                                <div class="form-group">
                                    <label for="ttl">Tempat, Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="ttl" value="{{ $tempat_tanggal_lahir }}" name="ttl"
                                        placeholder="Enter Tempat, Tanggal Lahir" />
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">
                                    Update
                                </button>
                            </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
