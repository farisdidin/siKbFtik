@extends('page_template')
@section('username')
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li><a href="register"><strong>Daftar</strong></a></li>
      <li><a href="login"><strong>Masuk</strong></a></li>
    </ul>
</div>
    
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 280px;">
  <div class="container">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <div class="col-md-12">
      <div class="box box-solid">

        <!-- /.box-header -->
        <div class="box-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
                <img class="img image img-responsive col-md-12" src="https://wearesocial-net.s3.amazonaws.com/wp-content/uploads/2017/07/inclusion-and-diversity2-1200.jpg" style="height :500px" alt="First slide">

                <div class="carousel-caption">
                </div>
              </div>
              <div class="item">
                <img class="img image img-responsive col-md-12" src="https://kampungsarjana.org/wp-content/uploads/2018/01/Bazar-c4s-Cibuyutan-1080x675.jpg" style="height :500px" alt="Second slide">

                <div class="carousel-caption">
                </div>
              </div>
              <div class="item active">
                <img class="img image img-responsive col-md-12" src="https://faithandetcetera.files.wordpress.com/2015/09/20150822-pvi-pol-arellanountitled-52-of-120.jpg?w=840" style="height :500px" alt="Third slide">

                <div class="carousel-caption">
                  Third Slide
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
            <div class="col">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h2 class="register-logo"><b>Kampung Binaan FTIK</b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <p style="" align="justify">
                    Kampung binaan FTIK adalah kampung yang dibina oleh mahasiswa Fakultas Teknologi Informasi dan komunikasi dan dikoordinir oleh BEM FTIK. Sebagai insan yang mulia, mahasiswa perlu dibekali dengan salah satu nilai Tri Dharma Perguruan Tinggi
                  </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>


@endsection