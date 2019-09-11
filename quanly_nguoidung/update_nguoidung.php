<?php
include('config.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql='SELECT * FROM "nguoidung" Where id='.$id;
	$query=pg_query($dbcon,$sql);

	while($kq=pg_fetch_assoc($query)){
		$ten=$kq['ten'];
		$tuoi=$kq['tuoi'];
		$diachi=$kq['diachi'];
		$email=$kq['email'];
		$sdt=$kq['sdt'];
	}
	pg_close($dbcon);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cập nhật người dùng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cập nhật người dùng</h2>
  <form class="form-horizontal" action="xuly.php">
	<div class="form-group">
	  <label class="control-label col-sm-2" for="ten">Tên:</label>
	  <div class="col-sm-10">
		<input type="ten" class="form-control" id="ten" placeholder="Nhập tên" name="ten" value="<?php echo $ten;?>">
	  </div>
	</div>
	<div class="form-group">
	  <label class="control-label col-sm-2" for="tuoi">Tuổi:</label>
	  <div class="col-sm-10">
		<input type="tuoi" class="form-control" id="tuoi" placeholder="Nhập tuổi" name="tuoi" value="<?php echo $tuoi;?>">
	  </div>
	</div>
	<div class="form-group">
	  <label class="control-label col-sm-2" for="diachi">Địa chỉ:</label>
	  <div class="col-sm-10">
		<input type="diachi" class="form-control" id="diachi" placeholder="Nhập Địa chỉ" name="diachi" value="<?php echo $diachi;?>">
	  </div>
	</div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" value="<?php echo $email;?>">
      </div>
    </div>
    <div class="form-group">
	  <label class="control-label col-sm-2" for="sdt">Điện thoại:</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại" name="sdt" value="<?php echo $sdt;?>">
	  </div>
	</div>
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="capnhat_nguoidung" id="capnhat_nguoidung" class="btn btn-default">Lưu</button>
      </div>
    </div>
  </form>
  <hr>
  <a href="nguoidung.php">Quay lại</a>
</div>

</body>
</html>
