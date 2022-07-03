@extends('template.layout')

@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('mahasiswa.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                           <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nim" id="nim"
                                        placeholder="NIM" />
                                </div>
                            </div>
                           <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputName2"
                                        placeholder="Name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jurusan" class="form-control" id="jurusan"
                                        placeholder="Jurusan" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="inputEmail"
                                        placeholder="Email" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" name="alamat" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ttl"
                                        placeholder="Tempat, Tanggal Lahir" name="ttl" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no-telp" class="col-sm-2 col-form-label">No Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_hp" id="no-telp" placeholder="No Telp" />
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">
                                Submit
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
