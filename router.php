<?php
/* _router.php */
if(file_exists($_SERVER["SCRIPT_FILENAME"])){
  // false を返すとリクエストされたリソースをそのまま返します
  return false;
} else {
  require "index.php";
}