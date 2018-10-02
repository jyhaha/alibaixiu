<?php
    
    include_once "../tools/tools.php";

    $sql=" select * from categories ";

    $arr=sql_select($sql);

    echo json_encode($arr);

?>