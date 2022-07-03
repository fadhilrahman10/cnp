@extends('template.layout')

@section('title', 'Staff C&P')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Staff</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('staff.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control is-valid" id="username" name="username"
                                    placeholder="Enter Username" />
                                <span class="error invalid-feedback">Gagal</span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control is-invalid" id="password" name="password"
                                    placeholder="Password" />
                                <span class="error invalid-feedback">Gagal</span>
                            </div>
                            {{-- <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                                    placeholder="Confirm Password" />
                            </div> --}}
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
