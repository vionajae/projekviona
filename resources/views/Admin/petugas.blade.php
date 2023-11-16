<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Petugas</title>
	<!-- Bootstrap Styles-->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="  navbar-brand" href="{{url('LayoutUtama')}}"><strong>Bayarin</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="" href="{{url('LayoutUtama')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="ui-elements.html" href="{{url('admin/datasiswa')}}"><i class="fa fa-desktop"></i> Data Siswa</a>
                    </li>
					<li>
                        <a class="chart.html" href="{{url('admin/datapetugas')}}"><i class="fa fa-bar-chart-o"></i> Data Petugas</a>
                    </li>
                    <li>
                        <a class="tab-panel.html" href="{{url('admin/datakelas')}}"><i class="fa fa-qrcode"></i> Data Kelas</a>
                    </li>
                    
                    <li>
                        <a class="table.html" href="{{url('admin/dataspp')}}"><i class="fa fa-table"></i> Data Spp</a>
                    </li>
                    <li>
                        <a class="form.html" href="{{url('admin/transaksi')}}"><i class="fa fa-edit"></i> Transaksi Pembayaran</a>
                    </li>
                    <li>
                        <a class="chart.html" href="{{url('admin/histori')}}"><i class="fa fa-bar-chart-o"></i> Histori Pembayaran</a>
                    </li>
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> Laporan</a>
                    </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Tambah Petugas
                        </h1>

		</div>
            <form action="{{url('admin/petugas')}}" method="post">
                @csrf
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Petugas
                        </div>
                        <div class="card-body">
                            @if (session('pesan'))
                                <div class="alert alert-primary" role="alert">
                                    {{session('pesan')}}
                                  </div>
                                @endif
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input type="text" class="form-control" name="nama_petugas" placeholder="nama_petugas">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control">
                                                <option>Admin</option>
                                                <option>Petugas</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-default">Tambah</button>
                                        <button class="btn btn-default" type="reset">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
        </form>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="/assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
