<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];
		
		if ($ap=="data_dosen"){
			include "Data/data_dosen.php";
		}

		if($ap=="login"){
			include "Data/login.php";
		}

		if($ap=="pengumuman"){
			include "Data/pemenang_dosen.php";
		}

	}else{
		include "homepage.php";
	}

?>