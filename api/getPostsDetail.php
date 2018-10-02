<?php

          $id=$_GET['id'];


          require_once "../tools/tools.php";

          $sql=" select * from posts where id=$id ";

          $arr=sql_select($sql);

          if(count($arr)>0){
              echo json_encode($arr[0]);
          }else{
              echo "fail";
          }

?>