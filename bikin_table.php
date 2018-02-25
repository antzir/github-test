<?php 

	include('koneksi.php');
	include('database.php');

	$table = "create table uas(
				no int(11) not null primary key auto_increment,
				nama varchar(30) default null,
				kelas varchar(10) default null
	)";

	$bikin_table = mysql_query($table);

	$isi   = "insert into uas values
			  ('1','Anton Irawan','121A37'),
			  ('2','Irawan Anton','121A37')	
	";

	$bikin_isi = mysql_query($isi);

	if($bikin_table AND $bikin_isi){
		echo"berhasil";
	}else{
		echo"gagal";
	}


?>