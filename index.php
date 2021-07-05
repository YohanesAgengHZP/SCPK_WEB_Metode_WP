<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Pemilihan Dosen Terbaik Semester ini </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <?php
    	include "koneksi.php";
    ?>
    </head>

    <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Pemilihan Dosen Terbaik</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php
            $sq = mysqli_query($koneksi,"select status from tb_pengaturan where pengaturan='pengumuman'");
            $st = mysqli_fetch_array($sq);
            if($st['status']=="1"){
              ?><li><a href="?ap=pengumuman">Pengumuman Pemenang</a></li><?php
            }
          ?>
            <li><a href="?ap=data_dosen">Data Dosen</a></li>
            <li><a href="?ap=login">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<?php
		include "kontroller.php";
	?>
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h4>Projek Akhir SCPK </h4>
					<p>
						Sistem Cerdas Pembantu Keputusan <br/>
						Yohanes Ageng Hendrawan Zhamudra  (123190075), <br/>
            Anggit Pambudi Hutomo             (123190054) <br/>
						
					</p>
				</div><!-- /col-lg-4 -->
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>