<?php
  main();

function main(){
  // $visited = countUp();

  while(1);

  // if ($visited > 2) {
  //   $data = 'OK';
  //   header('Content-Type: application/json');
  //   echo json_encode($data);
  //   echo 'visited gt 3 times!!!';
  // } else {
  //   set_time_limit(1);
  //   while (1) {}
  // }
}
/**
 * @return String
 */
function counter() {
  return dirname(__FILE__).'/counter';
}

/**
 * @return Integer
 */
function countUp() {
  if ( $fh = fopen(counter(), 'r') ) {
    $count = fread($fh, filesize(counter()));
    fclose($fh);
  } else {
    $count = 0;
  }
  $fh = fopen(counter(), 'w');
  fwrite($fh, ++$count);
  fclose($fh);
  return $count;
}
