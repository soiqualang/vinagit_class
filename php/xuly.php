<?php
    include('config.php');
    
    $dbcon=pg_connect("dbname=".PG_DB." user=".PG_USER." password=".PG_PASS." host=".PG_HOST." port=".PG_PORT);
    
    //http://localhost/vinagit_class/php/xuly.php?ten=Khang+khin&tuoi=35&dienthoai=4766769
    
    if(isset($_GET['ten'])){
        $ten=$_GET['ten'];
        $tuoi=$_GET['tuoi'];
        $dienthoai=$_GET['dienthoai'];
        
        $truyvan="insert into users(ten,tuoi,dienthoai) values('".$ten."',$tuoi,$dienthoai)";
        //echo $truyvan;
        $thucthi=pg_query($dbcon,$truyvan);
        
        echo 'Da xu ly xong!';
        echo '<br>';
        echo '<a href="users.html">Quay lai nhap lieu</a>';
        
        header('Location: users.html');
        
    }else{
        echo 'Ban khong co quyen vo khu vuc nay!';
        echo '<br>';
        echo '<a href="users.html">Quay lai nhap lieu</a>';
        header('Location: users.html');
    }
    
    
    
    /*
    //Select
    
    $truyvan='select * from users';
    $thucthi=pg_query($dbcon,$truyvan);
    
    while($kq=pg_fetch_assoc($thucthi)){
        //var_dump($kq);
        //echo $kq['ten'];
        echo 'Nguoi dung '.$kq['ten'].' co tuoi la '.$kq['tuoi'];
        echo '<br>';
    }
    */
    
    /*
    //Insert    
    $truyvan="insert into users(ten,tuoi) values('Khang khin',30)";
    $thucthi=pg_query($dbcon,$truyvan);
    */
    
    /*
    //Update
    $truyvan="update users set ten='Khang bi khung chu khong khin' where id=16";
    $thucthi=pg_query($dbcon,$truyvan);
    */
    
    /*
    //Delete
    //$truyvan="delete from users where id=15";
    //Xoa het Khang
    $truyvan="delete from users where ten ilike '%khang%'";
    $thucthi=pg_query($dbcon,$truyvan);
    */
?>
