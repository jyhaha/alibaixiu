<?php

      session_start();

      echo json_encode($_SESSION['userinfo'][0]);

?>