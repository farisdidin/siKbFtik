@extends('page_template_donatur')
@section('style')
<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
</style>
@endsection
@section('username')
    @include('user')
@endsection

@section('content')
    {{-- rekening, pemilik rekening, nominal donasi --}}
    <div class="container col-md-6 col-md-offset-3">
        <form role="form" id="myform">
            <div class="box box-primary">
                <div class="box-body">
                        <div class="form-group">
                            <label for="">Nomor Rekening</label><br>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening" id="no_rekening" onkeypress="return isNumberKey(event)">
                        </div>
                        <div class="form-group">
                            <label for="">Pemilik Rekening</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Rekening" id="pemilik">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Donasi</label><br>
                            <div class="input-group"> 
                                <span class="input-group-addon">Rp</span>
                                <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="nominal" />
                            </div> 
                        </div>
    
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" onclick="check()">Donasi</button>
                </div>
            </div>
        </form>
    </div>
    <section class="content-header">
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Konfirmasi Donasi</h4>
                </div>
                <div class="modal-body">
                  <label for="">Rekening</label>
                  <h5 id="confirm-rekening"></h5>
                  <label for="">Atas Nama</label>
                  <h5 id="confirm-pemilik"></h5>
                  <label for="">Nominal</label>
                  <h5 id="confirm-nominal"></h5>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div> 
    </section>
@endsection


@section('js')
<script src="/js-webshim/minified/polyfiller.js"></script>
<script>
    webshims.setOptions('forms-ext', {
        replaceUI: 'auto',
        types: 'number'
    });
    webshims.polyfill('forms forms-ext'); 
    
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
    function check(){
        document.getElementById("confirm-rekening").innerHTML = document.getElementById("no_rekening").value;
        document.getElementById("confirm-pemilik").innerHTML = document.getElementById("pemilik").value;
        document.getElementById("confirm-nominal").innerHTML = document.getElementById("nominal").value;
        
    }

</script>
@endsection