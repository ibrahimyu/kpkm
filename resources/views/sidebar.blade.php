
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{('web/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="glyphicon glyphicon-unchecked text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            @foreach($link as $l)
            <!-- setting -->
            <li class="treeview">
              <a href="../public{{$l->link}}">
                <i class="glyphicon glyphicon-wrench"></i> <span>{{$l->menu}}</span> <i class="glyphicon glyphicon-menu-left pull-right"></i>
              </a>
            </li>
            @endforeach
<li class="treeview">
<a href="">
<i class="glyphicon glyphicon-wrench"></i><span>Setting App</span>
</a>
  <ul class="treeview-menu">
<li><a href="../public/sidebar">Sidebar </a></li>
<li><a href="">Edit Produk</a></li>
<li><a href="">Update Stok</a></li>
  </ul>
  </li>
      </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      