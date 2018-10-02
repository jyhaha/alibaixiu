<?php
    //获取数据
    $site_name=$_POST["site_name"];
    $site_description=$_POST["site_description"];
    $site_keywords=$_POST["site_keywords"];
    $comment_status=$_POST["status"];
    $comment_reviewed=$_POST["reviewed"];
    
    //获取图片文件并保存
    $logoImg=$_FILES["site_logo"];
    //保存文件名
    $imgName=$logoImg["name"];
    //保存临时路径
    $imgURL=$logoImg["tmp_name"];
    //转gbk
    $gbkName = iconv('utf-8','gbk',$imgName); 
    //新路径
    $newPath = "../assets/img/$gbkName";
    //移动
    move_uploaded_file($imgURL,$newPath);


    // return;

    include_once "../tools/tools.php";
    //修改网站logo
    if($imgURL!=""){
    $sql="update options set value='/assets/img/$imgName' where id=2 ";
    sql_ZSG($sql);
    }
    //修改网站名称
    $sql="update options set value='$site_name' where id=3 ";
    sql_ZSG($sql);
    //修改网站描述
    $sql="update options set value='$site_description' where id=4 ";
    sql_ZSG($sql);
    //修改网站关键词
    $sql="update options set value='$site_keywords' where id=5 ";
    sql_ZSG($sql);
    //修改网站评论功能
    $sql="update options set value='$comment_status' where id=7 ";
    sql_ZSG($sql);
    //修改网站人工批准
    $sql="update options set value='$comment_reviewed' where id=8 ";
    sql_ZSG($sql);

    
    
    echo "ok";
    
   
    

?>