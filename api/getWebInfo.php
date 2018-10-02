<?php
     
      include_once "../tools/tools.php";
      

      //查询文章总数,且文章不为trashed
      $sql="select * from posts where status!='trashed' ";
      $postsCount= count(sql_select($sql));

      //查询文章草稿的总数
      $sql="select * from posts where status='drafted' ";
      $draftedCount= count(sql_select($sql));

      //查询分类总数
      $sql="select * from categories";
      $categoryCount= count(sql_select($sql));

      //查询评论总数
      $sql="select * from comments where status!='trashed'";
      $commentsCount = count(sql_select($sql));

      //查询待审核总数
      $sql = "select *from comments where status = 'held' ";
      $heldCount = count(sql_select($sql));

      $arr=[
        "postsCount" => $postsCount,
        "draftedCount" => $draftedCount,
        "categoryCount" => $categoryCount,
        "commentsCount" => $commentsCount,
        "heldCount" => $heldCount
      ];

      echo json_encode($arr);
      

?>