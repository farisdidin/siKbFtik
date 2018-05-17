@extends('page_template')
@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="pengajar">Beranda <span class="sr-only">(current)</span></a></li>
      <li>
            <a href="artikel">Post </span></a>
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
@include('user')
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
                <div class="callout bg-purple-active col-md-4">
                    <h4>IPA</h4>
        
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                    <div class="callout bg-orange-active col-md-4">
                        <h4>Matematika</h4>
        
                        <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout bg-red-active col-md-4">
                        <h4>Bahasa Indonesia</h4>
        
                        <p>This is a yellow callout.</p>
                </div>
            </div>
                
            <div class="row">
                <div class="callout bg-aqua-active col-md-4">
                    <h4>Bahasa Iggris</h4>
        
                    <p>This is a green callout.</p>
                </div>
                <div class="callout bg-green-active col-md-4">
                    <h4>Kewarganegaraan</h4>
        
                    <p>This is a green callout.</p>
                </div>
                <div class="callout bg-yellow-active col-md-4">
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