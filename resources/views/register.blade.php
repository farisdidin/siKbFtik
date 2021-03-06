@extends('template2')
@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="/"><b>SIKB</b>FTIK</a>
      </div>
    
      <div class="register-box-body">
        <p class="login-box-msg">Daftar anggota baru</p>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_pengajar" data-toggle="tab">Pengajar</a></li>
          <li><a href="#tab_donatur" data-toggle="tab">Donatur</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_pengajar">
            <form  method="POST" action="register">
                @csrf
                <label>Nama Lengkap:</label>
                <div class="form-group has-feedback">
                  <input name="nama" type="text" class="form-control" placeholder="Nama lengkap">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <label>Nomor Identitas:</label>
                <div class="form-group has-feedback">
                  <input name="nrp" type="text" class="form-control" placeholder="NRP">
                  <span class="fa fa fw fa-credit-card form-control-feedback"></span>
                </div>
                <label>Username:</label>
                <div class="form-group has-feedback">
                  <input name="username" type="text" class="form-control" placeholder="Username" required>
                  <span class="fa fa fw fa-user form-control-feedback"></span>
                </div>
                <label>Tanggal Lahir:</label>
                <div class="form-group has-feedback">
                  <input name="ttl" type="date" class="form-control" placeholder="TTL">
                  <span class="fa fa fw fa-birthday-cake form-control-feedback"></span>
                </div>
                <label>Alamat:</label>
                <div class="form-group has-feedback">
                  <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                  <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <label>Nomor telepon:</label>
                <div class="form-group has-feedback">
                  <input name="handphone" type="text" class="form-control" placeholder="Phone">
                  <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <label>Kata Sandi:</label>
                <div class="form-group has-feedback">
                  <input name="password" type="password" class="form-control" placeholder="Kata Sandi" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <label>Ulangi Kata Sandi:</label>
                <div class="form-group has-feedback">
                  <input type="password" class="form-control" placeholder="Ketik Ulang Kata Sandi" required>
                  <span class="glyphicon glyphicon-repeat form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-8">
                    <div class="checkbox icheck">
                      <a href="/login" class="text-center">Sudah menjadi anggota</a>
                      {{-- <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                      </label> --}}
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                  </div>
                  <!-- /.col -->
                </div>
            </form>
          </div>
          <div class="tab-pane" id="tab_donatur">
            <form  method="POST" action="register">
              @csrf
              <label>Username:</label>
              <div class="form-group has-feedback">
                <input name="username" type="text" class="form-control" placeholder="Username" required>
                <span class="fa fa fw fa-user form-control-feedback"></span>
              </div>
              <label>Nomor Identitas:</label>
              <div class="form-group has-feedback">
                <input name="nrp" type="text" class="form-control" placeholder="No. KTP">
                <span class="fa fa fw fa-credit-card form-control-feedback"></span>
              </div>
              <label>Alamat:</label>
              <div class="form-group has-feedback">
                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
              </div>
              
              <label>Kata Sandi:</label>
              <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Kata Sandi" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <label>Ulangi Kata Sandi:</label>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Ketik Ulang Kata Sandi" required>
                <span class="glyphicon glyphicon-repeat form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <a href="/login" class="text-center">Sudah menjadi anggota</a>
                    {{-- <label>
                      <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label> --}}
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
        
      </div>
      
      
    
        
    
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    
    <!-- jQuery 3 -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });
      });
    </script>
    </body>
@endsection