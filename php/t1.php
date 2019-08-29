<?php
    /*
    echo '<h1>Day la php</h1>';
    echo "Noi dung\" php 2\"";
    echo '<br>';
    echo 4372634;
    */
    
    $ten='Long';
    $tuoi=30+3;
    $thongtin='Ten: '.$ten.' <br> Tuoi: '.$tuoi;    
    //echo $ten;
    
    $selectbox='<select>';        
    for($i=0;$i<10;$i++){
        $selectbox.='<option> Chon lua '.$i.'</option>';
    }        
    $selectbox.='</select>';
?>
<html>
<head>
    <title>Hoc PHP</title>
    <script>
        function noti(){
            //var aha='<?php echo $ten;?>';
            <?php
                //echo 'var aha="Toi ten Long";';
            ?>
            var ten='Kha';
            alert(ten);
        }
    </script>
</head>
<body>
    Day la ma HTML<br>
    <input type="button" value="Click" onclick="noti();">
    
    <hr>
    $ten
    <h2><?php echo $thongtin; ?></h2>
    
    <?php
        /*
            Bang: ==
            Khong bang: !=            
        */
        $tuoi=30;
        if($tuoi>30){
            echo 'Gia roi';
        }else if($tuoi==30){
            echo 'Ban 30 tuoi roi';
        }else{
            echo 'Con tre';
        }
        
        //Vong lap
        echo '<br>';
        /*
        echo '<select>';
        
        for($i=0;$i<10;$i++){
            //echo $i.'<br>';
            echo '<option> Chon lua '.$i.'</option>';
        }
            
        echo '</select>';
        */
        echo '<br>';
        
        echo $selectbox;
        
        function tenham($t){
            //echo 'day la ham php';
            echo 'Tuoi cua ban la: '.$t;
        }
        
        function hamxuatgiatri(){
            //return 'Day la ham xuat gia tri';
            return 30;
        }
        
        function nhanxettuoi($ten,$tuoi){
            if($tuoi>30){
                echo $ten.' Gia roi';
            }else if($tuoi==30){
                echo $ten.' Ban 30 tuoi roi';
            }else{
                echo $ten.' Con tre';
            }
        }
        
        //tenham(42);
        //echo hamxuatgiatri()+12;
        nhanxettuoi('Kha',20);
        
        echo '<hr>';
        
        $arr=['Kha','Khang','Long','Huong',50];
        
        for($i=0;$i<count($arr);$i++){
            echo $arr[$i];
            echo '<br>';
        }        
        
    ?>
</body>
</html>
