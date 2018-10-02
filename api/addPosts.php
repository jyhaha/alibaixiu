<?php
    //post 请求格式  title=&slug=&feature=1%E5%8D%A1%E8%90%A8.png&category=2&created=2018-08-12T10%3A45&status=drafted
     $title=$_POST["title"];          //文章标题
     $slug=$_POST["slug"];            //文章别名
     $category=$_POST["category"];    //文章分类
     $created=$_POST["created"];      //文章发布时间
     $status=$_POST["status"];        //文章状态
     $content=$_POST["content"];      //文章内容

     //处理图片文件

     $feature=$_FILES["feature"];      //文章特色图片
     //保存名字
     $fileName=$feature["name"];
    //拿到临时路径
    $tmp = $feature['tmp_name'];
    //转GBK
    $gbkName = iconv('utf-8','gbk',$fileName);
    //准备一个要保存的新的路径,PHP不支持根目录的写法
    $path = "../uploads/$gbkName";
    //移动
    move_uploaded_file($tmp,$path);
     
    $newPath="../uploads/ $fileName";

     session_start();  //开启session
     $userId=$_SESSION['userinfo'][0]['id'];
     

     require_once "../tools/tools.php";

     $sql="insert into posts(slug,title,feature,created,content,status,user_id,category_id) values('$slug','$title','$newPath','$created','$content','$status','$userId','$category')" ;

     $res=sql_ZSG($sql);


     if(count($res)>0){
         echo "ok";
     }else{
         echo "fail";
     }

?>