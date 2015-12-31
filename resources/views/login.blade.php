@extends('template')
@section('content')
<section class="content">
  <div class="login-box">

  <!--    <img src="<?php echo asset('web/dist/img/logo.png')?>" alt="" />-->
  <div class="row">
    <div class="col-md-12">
             <!-- Horizontal Form -->
             <div class="box box-info">
               <div class="box-header with-border">
                 <h3 class="box-title">Sign-in</h3>
               </div><!-- /.box-header -->
               <!-- form start -->
               <form class="form-horizontal">
                 <div class="box-body">
                   <div class="form-group">
                     <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                     <div class="col-sm-9">
                       <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                     <div class="col-sm-9">
                       <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                     </div>
                   </div>
                 </div><!-- /.box-body -->
                 <div class="box-footer">

                   <button type="submit" class="btn btn-info pull-right">Sign in</button>
                   <button type="submit" class="btn btn-default pull-right">Cancel</button>

                 </div><!-- /.box-footer -->
               </form>
             </div><!-- /.box -->
  </div>

  </div><!-- /.login-box -->


</section><!-- /.content -->
@stop
