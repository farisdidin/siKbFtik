@extends('page_template')

@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">Post <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="/artikel">Post Terbaru</a></li>
        <li><a href="#">Edit Post</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
        <li class="divider"></li>
        <li><a href="#">One more separated link</a></li>
      </ul>
    </li>
    <li ><a href="/materi-pengajar">Materi <span class="sr-only">(current)</span></a></li>
    <li><a href="/calendar">Timeline Pengajar</a></li>
    <li><a href="#">Daftar Pengajar</a></li>
    
    </ul>
  <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
      <input type="text" class="form-control" id="navbar-search-input" placeholder="Pencarian">
    </div>
  </form>
</div>
    
@endsection
@section('user')
    Pengajar
@endsection

@section('content')
<div class="col-md-12">
  <div class="box box-solid">
    
    <!-- /.box-header -->
    <div class="box-body">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img class="img image img-responsive col-md-12" src="https://wearesocial-net.s3.amazonaws.com/wp-content/uploads/2017/07/inclusion-and-diversity2-1200.jpg" style="height :500px" alt="First slide">

            <div class="carousel-caption">
              First Slide
            </div>
          </div>
          <div class="item">
            <img class="img image img-responsive col-md-12" src="https://content.linkedin.com/content/dam/me/learning/blog/2017/november/New.Skills.11.14.jpg" style="height :500px" alt="Second slide">

            <div class="carousel-caption">
              Second Slide
            </div>
          </div>
          <div class="item">
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
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection