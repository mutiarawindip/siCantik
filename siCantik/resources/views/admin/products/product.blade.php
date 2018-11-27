<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SiCantik | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/style.css') }}">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="skin-blue" data-spy="scroll" data-target="#scrollspy">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-lg"><b>Admin</b> SiCantik</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE-2.4.3/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="/adminProduct">
            <i class="fa fa-archive"></i> <span>Product</span>
          </a>
        </li>

        <li>
          <a href="/adminArticles">
            <i class="fa fa-file-text-o"></i> <span>Articles</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-body pad">
          <form class="form-horizontal" method="POST" action="{{ route('manageproducts.store') }}">
                        {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" class="form-control" id="judul" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Wardah</option>
              <option>Emina</option>
              <option>Sariayu</option>
              <option>Mustika Ratu</option>
              <option>Make Over</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input type="text" class="form-control" id="judul" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi</label>
            <input type="text" class="form-control" id="judul" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Choose Image</label>
            <input type="file" id="exampleInputFile">
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <div class="pad">
      This is an example of the control sidebar.
    </div>
  </aside><!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div><!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="{{asset('AdminLTE-2.4.3//bower_components/jquery/dist/jquery.min.js') }}"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="{{asset('AdminLTE-2.4.3//bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{asset('AdminLTE-2.4.3//plugins/fastclick/fastclick.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{asset('AdminLTE-2.4.3//dist/js/adminlte.min.js') }}"></script>
 <!-- SlimScroll -->
 <script src="{{asset('AdminLTE-2.4.3//bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
 <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js') }}"></script>
 <script src="{{asset('AdminLTE-2.4.3/docs.js') }}"></script>
 <script src="{{asset('AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
 <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
