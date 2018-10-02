<?php
  // get  获取页面轮播数据

     require_once "../tools/tools.php";
     $sql="select * from options where id=10";
     $arr=sql_select($sql);

     if(count($arr)>0){
          echo json_encode($arr[0]);
     }else{
         echo "fail";
     }


?>