<?php
include('db.php');

$sql='SELECT * FROM "donhang"';
$query=pg_query($dbcon,$sql);

if(isset($_GET['btn_timkiem'])){
    $txt_timkiem=$_GET['txt_timkiem'];
    $sql='SELECT *
FROM "donhang"
WHERE ("madonhang" ILIKE \'%'.$txt_timkiem.'%\' OR "tendonhang" ILIKE \'%'.$txt_timkiem.'%\' OR "donvitinh" ILIKE \'%'.$txt_timkiem.'%\' OR "mota" ILIKE \'%'.$txt_timkiem.'%\' OR "nguoinhap" ILIKE \'%'.$txt_timkiem.'%\' OR "xuatxu" ILIKE \'%'.$txt_timkiem.'%\')';
    
    $query=pg_query($dbcon,$sql);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý đơn hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Quản lý đơn hàng</h2>
  <p>Đơn hàng Fukuya: <b><a href="hanghoa_add.php">Thêm đơn hàng mới</a></b></p>
  
  <form action="" method="GET">
  
    <input type="text" name="txt_timkiem" id="txt_timkiem" placeholder="Nhập nội dung tìm kiếm" class="form-control">
    
    <button type="submit" class="btn btn-default" name="btn_timkiem" id="btn_timkiem">Tìm kiếm</button>
    
  </form>
  
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Mã đơn hàng</th>
        <th>Tên đơn hàng</th>
        <th>Xuất xứ</th>
        <th>Người nhập</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
        
        while($kq=pg_fetch_assoc($query)){
            //echo $kq['tendonhang'];
            echo '<tr>
                    <td>'.$kq['id'].'</td>
                    <td>'.$kq['madonhang'].'</td>
                    <td>'.$kq['tendonhang'].'</td>
                    <td>'.$kq['xuatxu'].'</td>
                    <td>'.$kq['nguoinhap'].'</td>
                    <td><a href="hanghoa_update.php?id='.$kq['id'].'">Cập nhật</a></td>
                    <td><a href="xuly.php?id='.$kq['id'].'&act=del">Xóa</a></td>
                </tr>';
        }
    ?>
      <!--<tr>
        <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td><a href="hanghoa_update.php">Cập nhật</a></td>
        <td><a href="">Xóa</a></td>
      </tr>-->
    </tbody>
  </table>
</div>

</body>
</html>
