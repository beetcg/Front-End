<?php
	require_once "./../src/app_api/modules/methods/common.php";
  session_start();

  $obj = new Methods();
  $res = $obj->logout();
  echo $res;
  if ($res) {
    session_destroy();
		header("Location: http://comiczone.hol.es/en/index");
  } else {
		echo "Error en Log Out - / ".$_COOKIE['email']." /";
	}
