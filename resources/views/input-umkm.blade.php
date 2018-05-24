@extends('page_template')

@section('username')
    @include('user')
@endsection
@section('content')
    <div class="container col-md-6  col-md-offset-3">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">UMKM</h3>
            </div>
            <form action="">
                <div class="box-body">
                    {{-- data nama umkm, jenis usaha, nama pemilik, alamat--}}
                    <label for="">Nama UMKM</label>
                    <input type="text" class="form-control">
                    <label for="">Jenis Usaha</label>
                    <input type="text" class="form-control">
                    <label for="">Nama Pemilik</label>
                    <input type="text" class="form-control">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control">
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary pull-right">Masukkan</button>
                </div>
            </form>
        </div>
    </div>
@endsection