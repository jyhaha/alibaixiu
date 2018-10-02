<?php

      $id=$_POST['id'];
      $status=$_POST['status'];

      include_once "../tools/tools.php";

      $sql="update comments set status='$status' where id in($id) ";
      
      $res=sql_ZSG($sql);

      if($res){
          echo "ok";
      }else{
          echo "fail";
      }

?>