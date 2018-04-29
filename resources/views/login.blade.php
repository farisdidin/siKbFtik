@extends('template2')
@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/pengajar"><b>SIKB</b>FTIK</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"></p>
    
        <form action="/pengajar" method="get">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Kata Sandi">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
               
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" > Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
    
        
        <!-- /.social-auth-links -->
    
       
        <a href="/register" class="text-center">Daftar Anggota Baru</a>
    
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
    </script>
    </body>
@endsection 
