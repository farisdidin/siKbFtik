@extends('page_template')

@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
      <li><a href="#">Diskusi</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Post <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Post Terbaru</a></li>
          <li><a href="#">Edit Post</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      <li><a href="#">Pengajar</a></li>
      <li><a href="timelinePengajar.html">Timeline Pengajar</a></li>
      <li><a href="#">Daftar Pengajar</a></li>
      
      </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
      </div>
    </form>
  </div>
    
@endsection