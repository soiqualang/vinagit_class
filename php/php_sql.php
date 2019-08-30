<?php
    include('config.php');
    
    $dbcon=pg_connect("dbname=".PG_DB." user=".PG_USER." password=".PG_PASS." host=".PG_HOST." port=".PG_PORT);
    
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
    
    //Delete
    //$truyvan="delete from users where id=15";
    //Xoa het Khang
    $truyvan="delete from users where ten ilike '%khang%'";
    $thucthi=pg_query($dbcon,$truyvan);
?>
