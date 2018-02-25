<?php 

	$database = mysql_select_db('uas');

	if(!$database){
		die('pilih database gagal');
	}

?>