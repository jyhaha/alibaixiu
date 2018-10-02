<?php

   $Calssify=$_GET['Classify'];
   $status=$_get['status'];

   require_once "../tools/tools.php";

   $sql=" select c.id,c.name,p.title,p.created,p.status from categories c inner join posts p on c.id=p.category_id where c.name=$Calssify and p.status='$status' ";

   $arr=sql_select($sql);

   echo json_encode($arr);

?>