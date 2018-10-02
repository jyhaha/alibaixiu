<?php

       $id=$_POST['id'];
       $name=$_POST["name"];
       $slug=$_POST['slug'];
       $site_name=$_POST["site_name"];
       echo $site_name;
       return;

       require_once "../tools/tools.php";

       $sql=" update categories set name='$name',slug=' $slug' where id=$id ";
       $res=sql_ZSG($sql);

       if($res){
           echo "ok";
       }else{
           echo "fail";
       }

?>