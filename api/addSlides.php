<?php

       $value=$_POST['value'];

       require_once "../tools/tools.php";

       $sql="update options set value='$value' where id=10 ";
       $res=sql_ZSG($sql);

       if($res){
           echo "ok";
       }else{
           echo "fail";
       }

?>