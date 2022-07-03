@extends('template.mahasiswa.layout')

@section('title', 'Biodata')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Profil</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="nim" id="nim"
                                    placeholder="NIM" />
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
                                <input type="text" class="form-control" id="no-telp" placeholder="No Telp" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Berkas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix justify-content-around">
                        <li>
                            <h4 class="text-center">CV</h4>
                            <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                    Sep2014-report.pdf</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">KTP</h4>
                            <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App
                                    Description.docx</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">Ijazah</h4>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                                    alt="Attachment" /></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                    photo1.png</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>2.67 MB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">Transkip Nilai</h4>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                                    alt="Attachment" /></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                    photo2.png</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1.9 MB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix justify-content-around">
                        <li>
                            <h4 class="text-center">Sertifikat</h4>
                            <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                    Sep2014-report.pdf</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">Sertifikat Vaksin</h4>
                            <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App
                                    Description.docx</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">Foto 3X4</h4>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                                    alt="Attachment" /></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                    photo1.png</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>2.67 MB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <h4 class="text-center">Foto Full Body</h4>
                            <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                                    alt="Attachment" /></span>

                            <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                    photo2.png</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1.9 MB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i
                                            class="fas fa-cloud-download-alt"></i></a>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
