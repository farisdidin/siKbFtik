@extends('page_template')
@section('menu')
@include('menu')

    
@endsection
@section('user')
    Pengajar
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