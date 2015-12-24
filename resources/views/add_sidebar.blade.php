@extends('template')
@section('content')
<section class="content">
<!-- add -->
<div class="col-md-10">
  <!-- Tambah stok -->
  <div class="box box-default" >
              <div class="box-header with-border">
                <h3 class="box-title">Add Sidebar</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-plus"></i></button>
                </div>
              </div><!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                <div class="col-md-12">
                <form class="form-horizontal" file="true" action="../public{{('/add_sidebar')}}" method="POST">
                  
                    <div class="box-body">
                      <div class="form-group">
                        <label for="link" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="tittle" placeholder="Link" name="link">
                        </div>
                      </div>
                     
                       <div class="form-group">
                        <label for="menu" class="col-sm-2 control-label">Menu</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="menu" placeholder="Menu" name="menu">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="Icon" class="col-sm-2 control-label">Icon</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Icon" placeholder="Icon" name="icon">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="Status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="description" placeholder="Status" name="status">
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div><!-- /.box-footer -->
                  </form>
                  </div>
                  </div>
              </div><!-- /.box-body -->
              
  </div>
</div>
</section><!-- /.content -->
<div class="clearfix"></div>
@stop