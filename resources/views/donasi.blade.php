@extends('page_template_donatur')
@section('username')
    @include('user')
@endsection

@section('content')
    {{-- rekening, pemilik rekening, nominal donasi --}}
    <div class="container col-md-6 col-md-offset-3">
        <form role="form">
            <div class="box box-primary">
                <div class="box-body">
                        <div class="form-group">
                            <label for="">Nomor Rekening</label><br>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening">
                        </div>
                        <div class="form-group">
                            <label for="">Pemilik Rekening</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Rekening">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Donasi</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nominal Donasi">
                        </div>
    
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Donasi</button>
                </div>
            </div>
        </form>
    </div>
@endsection