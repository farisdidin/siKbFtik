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
    <div class="box">
        <div class="box-header with-border">
            <h3>Tulis Artikel </h3>
        </div>
        <div class="box-body">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <img id='img-upload'style="max-height: 350px; max-width: 350px;"/>
            </div>
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label for="">Judul Artikel</label>
                        <input type="text" class="form-control" placeholder="Judul ...">
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Isi Artikel ..."></textarea>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
    
@endsection

@section('js')
<script>
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });
    
        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    
        $("#imgInp").change(function(){
            readURL(this);
        }); 	
    });

</script>
@endsection