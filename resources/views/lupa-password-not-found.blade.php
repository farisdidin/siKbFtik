@extends('template2')
@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><b>SIKB</b>FTIK</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
          
        <p class="login-box-msg"></p>
        <div class="nav-tabs-custom">
            <h4 class="text-red"><i class="fa fa-warning text-red"></i> Akun yang anda masukkan tidak ditemukan</h4>
            
            <h4>Temukan akun SIKB anda</h4>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_pengajar" data-toggle="tab">Pengajar</a></li>
                <li><a href="#tab_donatur" data-toggle="tab">Donatur</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_pengajar">
                    
                  <label>Username:</label>
                  <div class="form-group has-feedback">
                    <input name="username" type="text" class="form-control" placeholder="Username" required id="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                       
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="check()">Cari</button>
                    </div>
                    <!-- /.col -->
                  </div>
                    
                </div>
      
                <div class="tab-pane " id="tab_donatur">
                    <form action="auth.login" method="get">
                        @csrf
                        <label>Username:</label>
                        <div class="form-group has-feedback">
                          <input name="username" type="text" class="form-control" placeholder="Username" required>
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                             
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" >Cari</button>
                          </div>
                          <!-- /.col -->
                        </div>
                    </form>
      
                </div>
      
            </div>
        </div>
        
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    
    <!-- jQuery 3 -->
    <script src="{{asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset("/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- iCheck -->
    <script src="{{asset("/plugins/iCheck/icheck.min.js")}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });
      });

      function check(){
        var user = document.getElementById('username').value;
        if(user == 'didin'){
          window.location.href = '{{ url("/lupa-password-find") }}';
        }
      }
    </script>
</body>
@endsection 
