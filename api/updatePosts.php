<?php

       //title&slug&feature&category&created&status=published
    $title=$_POST["title"];          //文章标题
    $slug=$_POST["slug"];            //文章别名
    $category=$_POST["category"];    //文章分类
    $created=$_POST["created"];      //文章发布时间
    $status=$_POST["status"];        //文章状态
    $content=$_POST["content"];      //文章内容
    $id=$_POST["id"];
    
    

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
     
    $newPath="../uploads/$fileName"; 

    //var_dump($fileName);
    

    require_once "../tools/tools.php";
    
    if($tmp!=""){

    $sql=" update posts set slug='$slug',title='$title',featrue='$newPath',created='$created',content='content',status='$status',category_id='$created' where id=$id ";
    }else{
        $sql=" update posts set slug='$slug',title='$title',created='$created',content='$content',status='$status',category_id='$created' where id=$id "; 
    }

    $res=sql_ZSG($sql);

    if(count($res)>0){
        echo "ok";
    }else{
        echo "fail";
    }


?>