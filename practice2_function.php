<?php

  function monitor_data($list){
    foreach ($list as $key => $value) {
        echo "<p> | " . ($key+1) . " | $value | </p>";
    }
  }


  function file_read(){
    $data = file_get_contents(__DIR__."/practice2.json");
    $list = json_decode($data,true);
    return $list;
  }


  function write_sql($data){
      $dns = "mysql:host=127.0.0.1;dbname=php;charset=utf8";
      $pdo = new PDO($dns,"root","shr850");

      $sql = "insert into php_test(name,created_at,updated_at) values('".mb_convert_encoding($data,'UTF-8')."',now(),now());";
      $stmh = $pdo -> prepare($sql);
      $stmh->execute();
  }

  function delete_sql($data){
      $dns = "mysql:host=127.0.0.1;dbname=php;charset=utf8";
      $pdo = new PDO($dns,"root","shr850");

      $sql = "delete from php_test where id in(";
      foreach ($data as $key => $value){
        if ($key == 0){$sql = $sql."$value";}
        else{$sql = $sql.",$value";}
      }
      $sql = $sql.");";
      $stmh = $pdo -> prepare($sql);
      $stmh->execute();

  }
  function edit_sql($data,$id){

    $dns = "mysql:host=127.0.0.1;dbname=php;charset=utf8";
    $pdo = new PDO($dns,"root","shr850");

    $sql = "update php_test set name = '".$data."' where id = ".$id." ;";
    $stmh = $pdo -> prepare($sql);

    $stmh->execute();
  }
 ?>
