<?php

         session_start();
         
         if(isset($_SESSION['userinfo'])){
             echo "已登陆";
         }else{
             echo "没登陆";
         }

?>