<?php

       include_once "../tools/tools.php";
       //查询网站logo,网站名,网站描述,网站关键词

       //查询网站name
       $sql="select * from options where id=2 ";
       $resLogo=sql_select($sql);

       //查询网站name
       $sql="select * from options where id=3 ";
       $resName=sql_select($sql);

       //查询网站描述
       $sql="select * from options where id=4 ";
       $resDescription=sql_select($sql);

       //查询网站关键词
       $sql="select * from options where id=5 ";
       $resKeywords=sql_select($sql);

       //查询网站评论功能是否开启(1开启,0关闭)
       $sql="select * from options where id=7 ";
       $resStatus=sql_select($sql);

        //查询网站评论功能是否经人工批准(1开启,0关闭)
        $sql="select * from options where id=8 ";
        $resReviewed=sql_select($sql);
       
       
       $arr=[
           "logo"=>$resLogo[0]['value'],
           "name"=>$resName[0]['value'],
           "description"=>$resDescription[0]['value'],
           "keywords"=>$resKeywords[0]['value'],
           "status"=>$resStatus[0]['value'],
           "reviewed"=>$resReviewed[0]['value']
       ];

       echo json_encode($arr);
       



?>
        
