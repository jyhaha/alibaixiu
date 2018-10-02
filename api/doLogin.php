<?php
      
       $username=$_POST['username'];
       $userPwd=$_POST['userPwd'];

       include_once "../tools/tools.php";

       $sql="select * from users where email='$username' and password='$userPwd' ";

       $arr = sql_select($sql);
       //var_dump($arr);
       if(count($arr)>0){
           echo "ok";
           session_start();
           $_SESSION['userinfo']=$arr;
       }else{
           echo "fail";
       }

?>