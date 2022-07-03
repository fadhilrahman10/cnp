@extends('template.layout')

@section('title', 'Mahasiswa')

@push('css')
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{ asset('plugins/ekko-lightbox/ekko-lightbox.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Berkas Nama Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row d-flex align-items-stretch clearfix">
                        @forelse ($berkas as $data)
                        <div class="col-sm-3">
                            <div class="mailbox-attachments">
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
                            </div>
                        </div>
                        @empty
                            <p>Datas is Empty</p>
                        @endforelse
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        {{-- <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Detail Berkas Mahasiswa
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{ asset('dist/img/prod-1.jpg') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
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
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="mailbox-attachments d-flex align-items-stretch clearfix justify-content-around">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- /.row -->
@endsection

@push('js')
    <!-- Ekko Lightbox -->
    <script src="{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- Filterizr-->
    <script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            })
        });
    </script>
@endpush
