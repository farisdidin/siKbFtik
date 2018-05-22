@extends('page_template')
@section('menu')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
        <li class=""><a href="pengajar">Beranda <span class="sr-only">(current)</span></a></li>
        <li class="active">
            <a href="artikel">Post </span></a>
        </li>
        <li ><a href="/materi-pengajar">Materi <span class="sr-only">(current)</span></a></li>
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

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2 ">
        <div class="box box-primary">
            <div class="box-body">
                <div class="post">
                    <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                            <a href="#">Jonathan Burke Jr.</a>
                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                    </p>
                    <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                        </li>
                        <li class="pull-right">
                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                    </ul>
                
                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
        
            </div>

        </div>

    </div>



</div>
@endsection