<?php
	require_once "./src/app_api/modules/methods/common.php";
  session_start();

  $obj = new Methods();
  $res = $obj->logout();

  if ($res) {
    // unset($_COOKIE['email']);
    session_destroy();
		header("Location: /en/index");
  } else {
		echo "Error en Log Out - / ".$_COOKIE['email']." /";
	}
