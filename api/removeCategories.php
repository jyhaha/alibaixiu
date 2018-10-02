<?php
  //删除分类接口
  $id=$_POST['id'];

  require_once "../tools/tools.php";

  $sql=" delete from categories where id in($id) ";
  $res=sql_ZSG($sql);

  if($res){
      echo "ok";
  }else{
      echo "fail";
  }

?>