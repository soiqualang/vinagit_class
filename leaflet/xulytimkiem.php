<?php
    include('db.php');
    //1	6	2945.2	Hg/b	Nguyễn Thị Thu Sương
	$shbando=$_GET['shbando'];
    $shthua=$_GET['shthua'];
    $tenchu=$_GET['tenchu'];
    //echo $shbando;
    
    
    $where='WHERE 1=1 ';
    
    if($shbando!=''){
        $where=$where.' AND "shbando" = \''.$shbando.'\'';
    }
    
    if($shthua!=''){
        $where=$where.' AND "shthua" = \''.$shthua.'\'';
    }
    $where=$where.' AND "tenchu" ILIKE \'%'.$tenchu.'%\'';
    
    //echo $where;
    
    $sql='SELECT * FROM "thuadat2" '.$where.' LIMIT 50';
    
    //echo $sql;
    
    $noidung='<table border=1>';
    $noidung.='<tr>';
    $noidung.='<td><b>Tên</b></td>';
    $noidung.='<td><b>Địa chỉ</b></td>';
    $noidung.='</tr>';
    
    $query=pg_query($dbcon,$sql);
    while($kq=pg_fetch_assoc($query)){        
        $noidung.='<tr>';
        $noidung.='<td>'.$kq['tenchu'].'</td>';
        $noidung.='<td>'.$kq['diachi'].'</td>';
        $noidung.='</tr>';
    }
    $noidung.='</table>';
    
    echo $noidung;
?>
