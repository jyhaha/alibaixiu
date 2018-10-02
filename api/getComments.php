<?php
      header("Content-type: text/html; charset=utf-8");

      $pageIndex=$_GET['pageIndex'];
      $pageSize=$_GET['pageSize'];

      
      $start=($pageIndex-1)* $pageSize;


      include_once "../tools/tools.php";

      $sql="select c.id,c.author,c.content,p.title,c.created,c.status from comments c inner join posts p on c.post_id=p.id where c.status != 'trashed' 
      limit  $start,$pageSize ";
         
      $data=sql_select($sql);
      //var_dump($data);
      

      $sql= " select c.id,c.author,c.content,p.title,c.created,c.status from comments  c
      inner join posts  p
      on c.post_id = p.id
      where c.status != 'trashed'";

      $totalCount =count(sql_select($sql));

      //echo $totalCount;
      
      $arr=[
            "data"=>$data,
            "totalCount"=>$totalCount 
      ];

      

      echo json_encode($arr);



?>