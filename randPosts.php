<?php 

require_once "tools/tools.php";
$sql="select * from posts order by rand() limit 5";
$data=sql_select($sql);

//在数据库随机5篇文章


for($i=0;$i<count($data);$i++):   ?>
    <li>
      <a href="detail.php">
        <p class="title"><?php echo $data[$i]["title"]?></p>
        <p class="reading">阅读(<?php echo $data[$i]["views"]?>)</p>
        <div class="pic">
          <img src="<?php echo $data[$i]["feature"]?>" alt="">
        </div>
      </a>
    </li>
<?php endfor;?>
