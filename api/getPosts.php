<?php
   
      $pageIndex=$_POST['pageIndex']; //当前页
      $pageSize=$_POST['pageSize'];   //当前页的评论数
 
      $classify=$_POST['classify'];   //获取所有分类value值
      $status=$_POST['status'];       //获取分类状态

      $start = ($pageIndex - 1) * $pageSize;  //计算当前页开始的id

      include_once "../tools/tools.php";

      $sql="select p.id,p.title,u.nickname,c.name,p.created,p.status from posts p
      inner join users u
      on p.user_id = u.id
      inner join categories c
      on p.category_id = c.id
      where p.status != 'trashed'";

      if( $classify!="" ){
           //才加条件，记得一定要加空格
        $sql .= " and p.category_id='$classify'";
      }

      if($status != ""){
        //如果状态不为空，才加这个条件
        //记得前面加空格
        $sql .= " and p.status='$status'";
    }

        $sql .= " limit $start,$pageSize";



      $data=sql_select($sql);

      $sql="select p.id,p.title,u.nickname,c.name,p.created,p.status from posts p
      inner join users u
      on p.user_id = u.id
      inner join categories c
      on p.category_id = c.id
      where p.status != 'trashed'";

      if( $classify!="" ){   //如果calssify为空.则查询所有数据,不为空则执行添加条件中的语句
        //才加条件，记得一定要加空格
        $sql .= " and p.category_id='$classify'";
        }

        if($status != ""){
            //如果状态不为空，才加这个条件
            //记得前面加空格
        $sql .= " and p.status='$status'";
        }



      $totalCount =sql_select($sql);

      $pageSizeCount=ceil( count($totalCount) / $pageSize);  //计算页面的总数
      

      $arr=[
          "data"=>$data,
          "totalPage" =>$pageSizeCount
      ];

       echo json_encode($arr);

?>