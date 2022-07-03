@extends('template.layout')

@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Upload</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="cv" class="col-sm-2 col-form-label">CV</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="cv" />
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="ktp" name="ktp" />
                                    <label class="custom-file-label" for="ktp">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-2 col-form-label">Ijazah</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="ijazah" name="ijazah" />
                                    <label class="custom-file-label" for="ijazah">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="transkip-nilai" class="col-sm-2 col-form-label">Transkip Nilai</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="transkip-nilai"
                                        name="transkip-nilai" />
                                    <label class="custom-file-label" for="transkip-nilai">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sertifikat" class="col-sm-2 col-form-label">Sertifikat</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sertifikat" name="sertifikat" />
                                    <label class="custom-file-label" for="sertifikat">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sertifikat-vaksin" class="col-sm-2 col-form-label">Sertifikat Vaksin</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sertifikat-vaksin"
                                        name="sertifikat-vaksin" />
                                    <label class="custom-file-label" for="sertifikat-vaksin">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto-3x4" class="col-sm-2 col-form-label">Foto 3X4</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto-3x4" name="foto-3x4" />
                                    <label class="custom-file-label" for="foto-3x4">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto-full-body" class="col-sm-2 col-form-label">Foto Full Body</label>
                            <div class="col-sm-10">
                                <!-- <label for="customFile">Custom File</label> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto-full-body"
                                        name="foto-full-body" />
                                    <label class="custom-file-label" for="foto-full-body">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-11 col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
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
