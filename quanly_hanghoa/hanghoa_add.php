<?php
include('db.php');
$sql='SELECT * FROM "vn_tinh" ORDER BY "ten_vi"';
$query=pg_query($dbcon,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thêm đơn hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Thêm đơn hàng</h2>
  <form class="form-horizontal" action="xuly.php">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="madonhang">Mã đơn hàng:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="madonhang" placeholder="Nhập mã đơn hàng" name="madonhang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tendonhang">Tên đơn hàng:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tendonhang" placeholder="Nhập tên đơn hàng" name="tendonhang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="donvitinh">Đơn vị tính:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="donvitinh" placeholder="Nhập đơn vị tính" name="donvitinh">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mota">Mô tả:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="don_gia">Đơn giá:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="don_gia" placeholder="Nhập đơn giá" name="don_gia">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nguoinhap">Người nhập:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nguoinhap" placeholder="Nhập người nhập" name="nguoinhap">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="xuatxu">Xuất xứ:</label>
      <div class="col-sm-10">
        <select class="form-control" id="xuatxu" name="xuatxu">
            
            <?php
                while($kq=pg_fetch_assoc($query)){
                    echo '<option value="'.$kq['ten_vi'].'">'.$kq['ten_vi'].'</option>';
                
                }
            ?>
            
            <!--<option value="HaNoi">Ha Noi</option>
            <option value="NgheAn">Nghe An</option>
            <option value="HCM">Ho Chi Minh</option>-->
        </select>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="trangthai" id="trangthai">Đã xử lý</label>
        </div>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btn_luu" id="btn_luu">Lưu</button>
      </div>
    </div>
  </form>
  <hr>
  <a href="hanghoa_view.html">Quay lại</a>
</div>

</body>
</html>
