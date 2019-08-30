<?php
include('db.php');

$id=$_GET['id'];

$sql='SELECT * FROM "donhang" where id='.$id;
$query=pg_query($dbcon,$sql);
while($kq=pg_fetch_assoc($query)){
    $madonhang=$kq['madonhang'];
    $tendonhang=$kq['tendonhang'];
    $donvitinh=$kq['donvitinh'];
    $mota=$kq['mota'];
    $don_gia=$kq['don_gia'];
    $nguoinhap=$kq['nguoinhap'];
    $xuatxu=$kq['xuatxu'];
    $trangthai=$kq['trangthai'];
}

//lay sanh sach tinh thanh
$sql='SELECT * FROM "vn_tinh" ORDER BY "ten_vi"';
$query_vn_tinh=pg_query($dbcon,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cập nhật đơn hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cập nhật đơn hàng</h2>
  <form class="form-horizontal" action="xuly.php">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="madonhang">Mã đơn hàng:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="madonhang" placeholder="Nhập mã đơn hàng" name="madonhang" value="<?php echo $madonhang;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tendonhang">Tên đơn hàng:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tendonhang" placeholder="Nhập tên đơn hàng" name="tendonhang" value="<?php echo $tendonhang;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="donvitinh">Đơn vị tính:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="donvitinh" placeholder="Nhập đơn vị tính" name="donvitinh" value="<?php echo $donvitinh;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mota">Mô tả:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mota" placeholder="Nhập mô tả" name="mota" value="<?php echo $mota;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="don_gia">Đơn giá:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="don_gia" placeholder="Nhập đơn giá" name="don_gia" value="<?php echo $don_gia;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nguoinhap">Người nhập:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nguoinhap" placeholder="Nhập người nhập" name="nguoinhap" value="<?php echo $nguoinhap;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="xuatxu">Xuất xứ:</label>
      <div class="col-sm-10">
        <select class="form-control" id="xuatxu" name="xuatxu">
            <?php
                while($kq=pg_fetch_assoc($query_vn_tinh)){
                    if($kq['ten_vi']==$xuatxu){
                        $select="selected";
                    }else{
                        $select='';
                    }
                    echo '<option value="'.$kq['ten_vi'].'" '.$select.'>'.$kq['ten_vi'].'</option>';
                
                }
            ?>
        
            <!--<option value="HaNoi">Ha Noi</option>
            <option value="NgheAn">Nghe An</option>
            <option value="HCM" selected>Ho Chi Minh</option>-->
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
        <input type="hidden" class="form-control" id="id" placeholder="Nhập người nhập" name="id" value="<?php echo $id;?>">
        <button type="submit" class="btn btn-default" name="btn_update" id="btn_update">Cập nhật</button>
      </div>
    </div>
  </form>
  <hr>
  <a href="hanghoa_view.php">Quay lại</a>
</div>

</body>
</html>
