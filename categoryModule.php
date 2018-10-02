<ul>
    <!-- 生成分类模块和自适应分类模块 -->
<?php  require_once "tools/tools.php";     //导入查询工具
      $sql="select * from categories";     //查询所有的分类
      $CalssifyData=sql_select($sql);      
      //var_dump($CalssifyData);

?>

 
       <!-- 遍历所有分类并把每条分类数据添加到对应的标签中 -->
        <?php foreach($CalssifyData as $value ):?>   
        <li><a href="list.php?name=<?php echo $value["name"]?>&cateID=<?php echo $value["id"]?>"><i class="fa fa-glass"></i><?php echo $value["name"]?></a></li>
        
        <?php endforeach;?>

        <!-- <li><a href="javascript:;"><i class="fa fa-glass"></i>奇趣事</a></li>
        <li><a href="javascript:;"><i class="fa fa-phone"></i>潮科技</a></li>
        <li><a href="javascript:;"><i class="fa fa-fire"></i>会生活</a></li>
        <li><a href="javascript:;"><i class="fa fa-gift"></i>美奇迹</a></li> -->
      </ul>
    </div>
    <div class="header">
      <h1 class="logo"><a href="index.html"><img src="assets/img/logo.png" alt=""></a></h1>

      <ul class="nav">
   <?php foreach($CalssifyData as $value ):?>
        <li><a href="list.php?name=<?php echo $value["name"]?>&cateID=<?php echo $value["id"]?>"><i class="fa fa-glass"></i><?php echo $value["name"]?></a></li>
        
        <?php endforeach;?>

      </ul>