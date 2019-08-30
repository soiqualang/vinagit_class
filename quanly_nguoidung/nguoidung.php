<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Danh sách người dùng</h2>
<a href="add_nguoidung.html">Thêm người dùng</a>
<br><br>
<table>
  <tr>
    <th>STT</th>
	<th>Tên</th>
    <th>Email</th>
    <th>Địa chỉ</th>
	<th></th>
	<th></th>
  </tr>
  
  <?php
	$sql='SELECT * FROM "nguoidung"';
	$query=pg_query($dbcon,$sql);
	
	$i=1;
	while($kq=pg_fetch_assoc($query)){
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$kq['ten'].'</td>
				<td>'.$kq['email'].'</td>
				<td>'.$kq['diachi'].'</td>
				<td><a href="update_nguoidung.php?id='.$kq['id'].'">Sửa</a></td>
				<td><a href="xuly.php?act=xoa&id='.$kq['id'].'">Xóa</a></td>
			  </tr>';
		$i++;
	}
	pg_close($dbcon);
  ?>
</table>

</body>
</html>
