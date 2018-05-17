@extends('page_template')
@section('username')
@include('user')
@endsection
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
@section('content')
<div class="content-wrapper">
    <section class="content-header">
            <h1>
                Daftar Pengajar
                <small>Kampung Binaan</small>
            </h1>
            {{-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Widgets</li>
            </ol> --}}
    </section>
    
    <div class="row">
        <div class="col-md-4">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <h3 class="widget-user-username">Alexander Pierce</h3>
                  <h5 class="widget-user-desc">PENGAJAR</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">085678212xxx</h5>
                        <span class="description-text">TELEPON</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
            </div>
    
        </div>
        <div class="col-md-4">
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue-active">
                      <h3 class="widget-user-username">Alexander Pierce</h3>
                      <h5 class="widget-user-desc">PENGAJAR</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">085678212xxx</h5>
                            <span class="description-text">TELEPON</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                </div>
        
        </div>
        <div class="col-md-4">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-orange-active">
                          <h3 class="widget-user-username">Alexander Pierce</h3>
                          <h5 class="widget-user-desc">PENGAJAR</h5>
                        </div>
                        <div class="widget-user-image">
                          <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                              
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                              <div class="description-block">
                                <h5 class="description-header">085678212xxx</h5>
                                <span class="description-text">TELEPON</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                              
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                    </div>
            
        </div>
    
    </div>
    <div class="row">
            <div class="col-md-4">
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-green-active">
                      <h3 class="widget-user-username">Alexander Pierce</h3>
                      <h5 class="widget-user-desc">PENGAJAR</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">085678212xxx</h5>
                            <span class="description-text">TELEPON</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                </div>
        
            </div>
            <div class="col-md-4">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-red-active">
                          <h3 class="widget-user-username">Alexander Pierce</h3>
                          <h5 class="widget-user-desc">PENGAJAR</h5>
                        </div>
                        <div class="widget-user-image">
                          <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                              
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                              <div class="description-block">
                                <h5 class="description-header">085678212xxx</h5>
                                <span class="description-text">TELEPON</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                              
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                    </div>
            
            </div>
            <div class="col-md-4">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-lime-active">
                              <h3 class="widget-user-username">Alexander Pierce</h3>
                              <h5 class="widget-user-desc">PENGAJAR</h5>
                            </div>
                            <div class="widget-user-image">
                              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                              <div class="row">
                                <div class="col-sm-4 border-right">
                                  
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                  <div class="description-block">
                                    <h5 class="description-header">085678212xxx</h5>
                                    <span class="description-text">TELEPON</span>
                                  </div>
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                  
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                        </div>
                
            </div>
        
        </div>

</div>

@endsection