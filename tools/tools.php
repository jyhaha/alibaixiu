<?php

          function sql_select($sql){

                   $link=mysqli_connect("127.0.0.1","root","root","baixiu");

                   $res=mysqli_query($link,$sql);
                   //转成数组
                   $arr=mysqli_fetch_all($res,1);

                   mysqli_close($link);

                   return $arr;


          } 

          function sql_ZSG($sql){

            $link=mysqli_connect("127.0.0.1","root","root","baixiu");

            $res=mysqli_query($link,$sql);
            //转成数组
            mysqli_close($link);
            
            
            return $res;


   } 


?>