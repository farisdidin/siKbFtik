@extends('page_template_donatur')
@section('menu')
    
@endsection

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-1">
        <div class="box box-primary">
            <div class="box-body box-profile">
                {{-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> --}}
                <img src="/dist/img/user2-160x160.jpg" class="profile-user-img img-responsive img-circle" alt="User profile picture">
                
                <h3 class="profile-username text-center">Faris Didin</h3>

                <p class="text-muted text-center">Donatur</p>

                <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Alamat</b> <a class="pull-right">Kejawan Gebang Gg II, Sukolilo, Surabaya</a>
                </li>
                <li class="list-group-item">
                    <b>Nomor KTP</b> <a class="pull-right">3773274745</a>
                </li>
                
                </ul>

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
            </div>
            <!-- /.box-body -->
            </div>
    </div>
    <div class="col-md-6">
        {{-- form username, Nomor KTP, Alamat --}}
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Profil Donatur</h3>
            </div>
            <form action="" role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor KTP</label>
                        <input type="text" class="form-control" id="ktp" placeholder="Masukkan No. KTP">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection