@extends('page_template')
@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="pengajar">Beranda <span class="sr-only">(current)</span></a></li>
      <li class="dropdown active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Post <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
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
<div class="row">
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
  
            <img class="img image img-responsive" src="https://wearesocial-net.s3.amazonaws.com/wp-content/uploads/2017/07/inclusion-and-diversity2-1200.jpg" alt="">
          </div>
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>

          <h3 class="box-title">Judul Artikel</h3>
        </div>
        <div class="box-header with-border">
          <h4 class="box-title">23-4-2018</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <p align="justify" style="">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
            <img class="img image img-responsive" src="https://content.linkedin.com/content/dam/me/learning/blog/2017/november/New.Skills.11.14.jpg" alt="">
        </div>
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>

          <h3 class="box-title">Belajar Yuk</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p align="justify" style="">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-4">
        <div class="box box-solid">
            <div class="box-header with-border">
                <img class="img image img-responsive" src="https://faithandetcetera.files.wordpress.com/2015/09/20150822-pvi-pol-arellanountitled-52-of-120.jpg?w=840" alt="">
            </div>
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
    
              <h3 class="box-title">Bersih itu Baik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p align="justify" style="">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    <!-- ./col -->
    <div class="row">
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
      
                <img class="img image img-responsive" src="https://wearesocial-net.s3.amazonaws.com/wp-content/uploads/2017/07/inclusion-and-diversity2-1200.jpg" alt="">
              </div>
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
    
              <h3 class="box-title">Judul Artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="justify" style="">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
                <img class="img image img-responsive" src="https://content.linkedin.com/content/dam/me/learning/blog/2017/november/New.Skills.11.14.jpg" alt="">
            </div>
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
    
              <h3 class="box-title">Belajar Yuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p align="justify" style="">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <img class="img image img-responsive" src="https://faithandetcetera.files.wordpress.com/2015/09/20150822-pvi-pol-arellanountitled-52-of-120.jpg?w=840" alt="">
                </div>
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
        
                  <h3 class="box-title">Bersih itu Baik</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p align="justify" style="">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      

    @endsection

 