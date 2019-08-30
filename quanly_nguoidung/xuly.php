<?php
include('config.php');

if(isset($_GET['luu_nguoidung'])){
	$ten=$_GET['ten'];
	$tuoi=$_GET['tuoi'];
	$diachi=$_GET['diachi'];
	$email=$_GET['email'];
	$sdt=$_GET['sdt'];
	
	//kiem tra neu ten co gia tri thi moi luu
	if($ten!=''){		
		$sql='INSERT INTO "nguoidung" ("ten", "tuoi", "diachi", "email", "sdt") VALUES (\''.$ten.'\', \''.$tuoi.'\', \''.$diachi.'\', \''.$email.'\', \''.$sdt.'\');';
		
		pg_query($dbcon,$sql);
	}
	header('Location: nguoidung.php');
}

if(isset($_GET['capnhat_nguoidung'])){
	
	echo 'hahahah';
	
	$id=$_GET['id'];
	$ten=$_GET['ten'];
	$tuoi=$_GET['tuoi'];
	$diachi=$_GET['diachi'];
	$email=$_GET['email'];
	$sdt=$_GET['sdt'];
	
	//kiem tra neu ten co gia tri thi moi luu
	if($ten!=''){		
		$sql='UPDATE "nguoidung" SET
		"ten" = \''.$ten.'\',
		"tuoi" = \''.$tuoi.'\',
		"diachi" = \''.$diachi.'\',
		"email" = \''.$email.'\',
		"sdt" = \''.$sdt.'\' WHERE "id" = \''.$id.'\';';
		
		pg_query($dbcon,$sql);
	}
	header('Location: nguoidung.php');
}

if(isset($_GET['act'])){	
	if($_GET['act']=='xoa'){
		$id=$_GET['id'];
		$sql='DELETE FROM "nguoidung" WHERE "id" = \''.$id.'\';';
		pg_query($dbcon,$sql);
	}
	header('Location: nguoidung.php');
}

/*
INSERT INTO "nguoidung" ("ten", "tuoi", "diachi", "email", "sdt")
VALUES ('Khang', '20', 'Xóm 5, ngõ 8, Hà Nội', 'khang@vinagit.com', '2453646');
*/

?>