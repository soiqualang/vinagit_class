<?php
include('db.php');

if(isset($_GET['btn_luu'])){
    $madonhang=$_GET['madonhang'];
    $tendonhang=$_GET['tendonhang'];
    $donvitinh=$_GET['donvitinh'];
    $mota=$_GET['mota'];
    $don_gia=$_GET['don_gia'];
    $nguoinhap=$_GET['nguoinhap'];
    $xuatxu=$_GET['xuatxu'];
    //$trangthai=$_GET['trangthai'];
    
    $sql='INSERT INTO "donhang" ("madonhang", "tendonhang", "donvitinh", "mota", "don_gia", "nguoinhap", "xuatxu", "trangthai")
VALUES (\''.$madonhang.'\', \''.$tendonhang.'\', \''.$donvitinh.'\', \''.$mota.'\', \''.$don_gia.'\', \''.$nguoinhap.'\', \''.$xuatxu.'\', NULL);';

    pg_query($dbcon,$sql);
    
    header('Location: hanghoa_view.php');
}

if(isset($_GET['btn_update'])){
    $id=$_GET['id'];
    $madonhang=$_GET['madonhang'];
    $tendonhang=$_GET['tendonhang'];
    $donvitinh=$_GET['donvitinh'];
    $mota=$_GET['mota'];
    $don_gia=$_GET['don_gia'];
    $nguoinhap=$_GET['nguoinhap'];
    $xuatxu=$_GET['xuatxu'];
    //$trangthai=$_GET['trangthai'];
    
    $sql='UPDATE "donhang" SET
    "id" = \''.$id.'\',
    "madonhang" = \''.$madonhang.'\',
    "tendonhang" = \''.$tendonhang.'\',
    "donvitinh" = \''.$donvitinh.'\',
    "mota" = \''.$mota.'\',
    "don_gia" = \''.$don_gia.'\',
    "nguoinhap" = \''.$nguoinhap.'\',
    "xuatxu" = \''.$xuatxu.'\',
    "trangthai" = NULL WHERE id='.$id;

    pg_query($dbcon,$sql);
    
    header('Location: hanghoa_view.php');
}

if(isset($_GET['act'])){
    if($_GET['act']=='del'){
        $id=$_GET['id'];
        $sql='delete from donhang where id='.$id;
        pg_query($dbcon,$sql);
        header('Location: hanghoa_view.php');
    }
}







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

if(isset($_GET['act1111'])){	
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
