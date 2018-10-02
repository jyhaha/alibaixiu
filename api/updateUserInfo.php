<?php
     //发送格式 
     //post
     //avatar=&email=1228619912%40qq.com&slug=Wuhaha&nickname=HelloWorld&bio=null
      
     $avatar=$_FILES['avatar'];       //用户头像  
     $email=$_POST['email'];          //用户邮箱
     $slug=$_POST['slug'];            //用户别名
     $nickname=$_POST['nickname'];     //用户昵称
     $bio=$_POST['bio'];              //用户简介

     session_start();  //开启session
      $userID=$_SESSION['userinfo'][0]['id'];   //获取修改当前用户信息的Id

   // 处理用户上传的头像

   $name=$avatar['name'];        //保存文件名
   $FileUrl=$avatar["tmp_name"];     //保存文件临时路径
   $gbkname=iconv("utf-8","gbk",$name);  //网页和数据库只支持utf-8格式,系统支持gbk,所以要装换
   $newUrl="../uploads/$name";              //新路径,存到数据库
   move_uploaded_file($FileUrl,"../uploads/$gbkname");   //把文件存到对应的文件下
    
   
   
     include_once "../tools/tools.php";
    
     if($FileUrl!=""){
        $sql=" update users set email='$email',slug='$slug',nickname ='$nickname',bio='$bio',avatar='$newUrl' where id=$userID  "; 
     }else{
        
        $sql=" update users set email='$email',slug='$slug',nickname ='$nickname',bio='$bio' where id=$userID  ";
        
     }
      
  
     $res=sql_ZSG($sql);

     if(count($res)>0){
         echo "ok";
        //  echo var_dump($avatar);
        //  echo var_dump($newUrl);
        //  echo var_dump($name);
         
         
         //修改成功后,此时页面的session还是原来的信息.所以要重新设置
         if($FileUrl!=""){   //当没有修改图片的时候,传过来的值是空的,所以不等空的时候才执行此语句
             $_SESSION['userinfo'][0]['avatar']=$newUrl;      
         }

         $_SESSION['userinfo'][0]['email']=$email;
         $_SESSION['userinfo'][0]['slug']=$slug;
         $_SESSION['userinfo'][0]['nickname']=$nickname;
         $_SESSION['userinfo'][0]['bio']=$bio;
                                     
          
     }else{
         echo "fail";
         
         
     }
     
?>