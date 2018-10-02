<?php
     
     $formerPwd=$_POST["formerPwd"];   //原密码
     $newPwd=$_POST['newPwd'];         //新密码
 

     session_start();
     $userPwd=$_SESSION["userinfo"][0]["password"];   //获取用户密码
     $userId=$_SESSION["userinfo"][0]["id"];          //获取用户id
     

     //var_dump($_SESSION["userinfo"][0]['id']);

     require_once "../tools/tools.php";

     if($formerPwd==$userPwd){    //如果原密码和数据缓存session密码一致,则执行语句
         $sql=" update users set password='$newPwd' where id=$userId  ";
         $res=sql_ZSG($sql);

         echo "ok";         

         unset($_SESSION["userinfo"]);   //修改成功后把用户的session清掉,重新登陆
         
     }else{
         echo "fail";
     }


?>