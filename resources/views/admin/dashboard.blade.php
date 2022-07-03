@extends('template.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <!-- Left col -->
        {{-- @dd(request()->session()->get('user')->username) --}}
        <section class="col-lg-7 connectedSortable">
            <h3>Selamat Datang {{ request()->session()->get('user')->username }}</h3>
        </section>
        <!-- /.Left col -->
    </div>
@endsection
