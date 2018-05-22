@extends('page_template')


@section('beranda','active')
    

@section('username')
@include('user')
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