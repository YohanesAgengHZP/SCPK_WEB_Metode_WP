<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];
		
		if ($ap=="peserta"){
			include "web/data_peserta/index.php";
		}

		if ($ap=="kriteria"){
			include "web/kriteria/index.php";
		}

		if ($ap=="hmp_kriteria"){
			include "web/hk/himp_kriteria.php";
		}

		if ($ap=="hitung"){
			include "web/proses_hitung/perhitungan.php";
		}

		if($ap=="login"){
			include "web/login.php";
		}

		if($ap=="pengaturan"){
			include "setting.php";
		}

	}else{
		include "home.php";
	}

?>