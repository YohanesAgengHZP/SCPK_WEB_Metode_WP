<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];
		
		if ($ap=="data_dosen"){
			include "Data/data_dosen.php";
		}

		if($ap=="login"){
			include "Data/login.php";
		}

	}else{
		include "input_nilai.php";
	}

?>