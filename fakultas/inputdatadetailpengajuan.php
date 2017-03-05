<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIB | Admin Logistik Fakultas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script>
        function myFunctionx(){
            var idpengajuan = document.getElementById("pengajuan").value;
            window.location.assign("?idpengajuan="+idpengajuan);
        }
        
    </script>
</head>

<body>
<?php
include "ceksession.php";
?>
    <div id="wrapper">

        <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="../fakultas/">ADMIN FAKULTAS <?php echo $_SESSION['fakultas']?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                  <li class="dropdown">
					<a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                </li>
            </ul>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="ubahpassword.php"><i class="fa fa-fw fa-edit"></i> Ubah Password</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Pengajuan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo">
                            <li>
                                <a href="inputdatapengajuan.php">Input Data Pengajuan</a>
                            </li>
							<li class="buka">
                                <a href="inputdatadetailpengajuan.php">Input Data Detail Pengajuan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demox"><i class="fa fa-fw fa-desktop"></i> Kelola Data Barang <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demox" class="collapse">
                            <li>
                                <a href="evaluasidatabarang.php">Evaluasi Data Barang </a>
                            </li>
                            <li>
                                <a href="lihatdatabarang.php">Lihat Data Barang </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demox1"><i class="fa fa-fw fa-desktop"></i> Kelola Data Tanah <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demox1" class="collapse">
                             <li>
                                <a href="lihatdatatanah.php">Lihat Data Tanah </a>
                            </li>
                        </ul>
                    </li>
				</ul>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        
                         <p align="center">
                                
                                <div class="img">
                                    <a id="atitle">
                                    <center>UNIT LOGISTIK <?php echo $_SESSION['fakultas']?></center>
									</a>
                                </div>
                        </p>
						<center>Input Data Detail Pengajuan</center>  
                        </h1>
                        <p>
                              <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Form Input Data Detail Pengajuan</h3>
                            </div>
                            <div class="panel-body">
                                  <div class="container">
                                          <form role="form" method="POST" action="inputdatadetailpengajuanact.php">
                                            <div class="form-group">
                                              <label >ID Pengajuan</label>
                                              <br>
                                              <select class="form-control" name="idpengajuan" id="pengajuan"  onchange="myFunctionx()" >
                                                    <option>--Pilih ID Pengajuan--</option>
                                                    <?php
                                                        include "config.php";
                                                        $belum="Belum Disetujui";
                                                        $test=$_SESSION['fakultas'];
                                                        $select = mysql_query( "SELECT idpengajuan FROM pengajuan where usernamefak='$test' and status='$belum' ");
                                                        while($data = mysql_fetch_array($select)){
                                                                ?>
                                                     <option value="<?php echo $data['idpengajuan'] ?>"><?php echo $data['idpengajuan'] ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                  <?php
                                                        include "config.php";
                                                        error_reporting(0);
                                                        $idpengajuan = $_GET['idpengajuan'];
                                                        $querysatu = mysql_query("SELECT status,usernamefak FROM pengajuan where idpengajuan='$idpengajuan' ");
                                                        $bok = mysql_fetch_array($querysatu);
                                                    ?>
                                              <br>
                                              <input class="form-control" readonly="readonly" name="idpengajuan" placeholder="ID Pengajuan" type="text" value ="<?php echo $idpengajuan ?>">
                                              <br>
                                              <label > Status </label>
                                              <br>
                                              <input class="form-control" name="status" type="text" readonly="readonly" value ="<?php echo $bok['status'] ?>" >
                                              <br>
                                              <label > Diajukan Oleh </label>
                                              <br>
                                              <input class="form-control" name="kepemilikan" type="text"  readonly="readonly" value ="<?php echo $bok['usernamefak'] ?>" >
                                              <br>
                                              <div class="alert alert-info">
                                              <strong>Forms Pengajuan ! </strong> Jika Sudah Disetujui Tidak Akan bisa Input. 
                                              </div>
                                              <label >Nama Barang </label>
                                              <input class="form-control" name="namabarang" type="text" placeholder="Isikan Nama Barang" >
                                              <br>
                                              <label >Jumlah Barang </label>
                                              <br>
                                              <input class="form-control" name="jumlah" type="text" placeholder="Isikan Kuantitas Barang" >
                                              <br>
                                              <div class="alert alert-danger">
                                              <strong>Catatan,</strong> Isikan Password Untuk Authentifikasi Pengajuan
                                              </div>
                                              <label> Authentifikasi Validasi </label>
                                              <br>
                                              <input class="form-control" name="password" type="password" placeholder="Isikan Password" >
                                              <br>
                                              <button type="submit" class="btn btn-sm btn-primary">Input</button>
                                              <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                              <br>
                                            </div>
                                            </form>

                            </div>
                            </p>
                    </div>
                </div>
                <!-- -->
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
