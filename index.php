<?php

    include "function.php";
    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");

?>
<?php
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-Perpustakaan</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Profil</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="?page=dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>	
                      <li>
                        <a  href="?page=buku"><i class="fa fa-table fa-3x"></i> Daftar Buku</a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-qrcode fa-3x"></i> Transaksi </a>
                    </li>				
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 
                        <?php

                          $page = $_GET['page'];
                          $aksi = $_GET['aksi'];

                          if ($page == "buku") {
                            if ($aksi == "") {
                              include "page/buku/buku.php";
                            }elseif ($aksi == "tambah") {
                              include "page/buku/tambah.php";
                            }elseif ($aksi == "hapus") {
                              include "page/buku/hapus.php";
                            }elseif ($aksi == "edit") {
                              include "page/buku/edit.php";
                            }
                          
                          }elseif ($page == "transaksi") {
                            if ($aksi == "") {
                              include "page/transaksi/transaksi.php";
                            }elseif ($aksi =="tambah") {
                              # code...
                              include "page/transaksi/tambah.php";
                            }elseif ($aksi =="kembali") {
                              # code...
                              include "page/transaksi/kembali.php";
                            }
                          }elseif ($page == "dashboard") {
                            if ($aksi == "") {
                              include "page/buku/dashboard.php";
                            }
                          }

                        ?>

                    </div>
                </div>

            </div>

        </div>


    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

    
   
</body>
</html>