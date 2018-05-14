@extends('page_template')
@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="pengajar">Beranda <span class="sr-only">(current)</span></a></li>
      <li class="dropdown">
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
      <li class="active"><a href="/materi-pengajar">Materi <span class="sr-only">(current)</span></a></li>
      <li><a href="/calendar">Timeline Pengajar</a></li>
      <li><a href="daftar-pengajar">Daftar Pengajar</a></li>
      
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
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="fa fa-bullhorn"></i>

            <h3 class="box-title">MATA PELAJARAN</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body col-md-12">
            <div class="row">
                <div class="callout callout-danger col-md-4">
                    <h4>IPA</h4>
        
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                    <div class="callout callout-info col-md-4">
                        <h4>Matematika</h4>
        
                        <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout callout-warning col-md-4">
                        <h4>Bahasa Indonesia</h4>
        
                        <p>This is a yellow callout.</p>
                </div>
            </div>
                
            <div class="row">
                <div class="callout callout-success col-md-4">
                    <h4>Bahasa Iggris</h4>
        
                    <p>This is a green callout.</p>
                </div>
                <div class="callout callout-success col-md-4">
                    <h4>Kewarganegaraan</h4>
        
                    <p>This is a green callout.</p>
                </div>
                <div class="callout callout-success col-md-4">
                    <h4>Kesenian</h4>
        
                    <p>This is a green callout.</p>
                </div>
                
            </div>
            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>


@endsection