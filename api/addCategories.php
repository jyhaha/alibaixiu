<?php
      
      $name=$_POST['name'];
      $slug=$_POST['slug'];

      

      require_once "../tools/tools.php";

      $sql="insert into categories(slug,name) values('$slug','$name')";
      $res=sql_ZSG($sql);

      if($res){
          echo "ok";
      }else{
          echo "fail";
      }


?>