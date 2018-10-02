<?php
    //处理添加轮播后台页面预览图片接口

    $url=$_FILES["img"];

    $name=$url["name"];   //保存文件名
    $fileUrl=$url["tmp_name"];  //保存图片临时路径
    $gbkName=iconv("utf-8","gbk",$name);
    $bol=move_uploaded_file($fileUrl,"../uploads/$gbkName");  //把图片保存到文件夹中
    $newUrl="../uploads/$name";

    //var_dump($url);
    echo $newUrl;   //返回新路径
    


?>