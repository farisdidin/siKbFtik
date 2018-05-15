@extends('page_template')

@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
    <li>
      <a href="artikel">Post </span></a>
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
@section('username')
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">Didin</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
              M. Faris Didin - Pengajar
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
</div>
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