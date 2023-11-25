<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Siswa</title>
	<!-- Bootstrap Styles-->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="{{url('LayoutUtama')}}"><strong>Bayarin</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a class="fa fa-sign-out fa-fw" href="{{url('/logout')}}" role="button">Logout</a>
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
                            Data Siswa
                        </h1>
									
		</div>
		
            <div id="page-inner"> 
                <form action="{{url('admin/datasiswa')}}" method="post">
                    @csrf
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Id Kelas</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Id Spp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $inem)
                                <tr>
                                    <td>{{$inem->nisn}}</td>
                                    <td>{{$inem->nis}}</td>
                                    <td>{{$inem->nama}}</td>
                                    <td>{{$inem->id_kelas}}</td>
                                    <td>{{$inem->alamat}}</td>
                                    <td>{{$inem->no_telp}}</td>
                                    <td>{{$inem->id_spp}}</td>
                                    <td>
                                        <a href="{{url('/admin/editsiswa/'.$inem->nisn)}}" type="button" class="btn btn-primary" ><i class="fa fa-edit"></i> Edit</a>
                                            <a  href="{{url('/admin/hapussiswa/'.$inem->nisn)}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    <a class="btn btn-primary" href="{{url('admin/tambah')}}" role="button">Tambah</a>
                </div>
            </div>
        </div>
    </form>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
