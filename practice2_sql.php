<?php
  if (!isset($_POST["btn"])){
    $_POST["btn"] = [];
  }
  if (empty($_POST["delete"])){
    $_POST["delete"] = 1;
  }
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }
  else{
    $page = 1;
  }
  if($_GET["page"] <= 0){
    $page = 1;
  }

  $offset = ($page - 1)* 10;

  $dns = "mysql:host=127.0.0.1;dbname=php;charset=utf8";
  $pdo = new PDO($dns,"root","shr850");



  if ($_POST["delete"] == "DeleteList"){
    $sql = "select id from php_test";
    $stmh = $pdo -> prepare($sql);
    $stmh->execute();
    $count = $stmh->rowCount();
    $del = [];
    $darr = $_POST["btn"];
    for($i = 0;$i < $count;$i++){
      $datalist = ($stmh->fetch(PDO::FETCH_ASSOC));
      foreach ($datalist as $key => $value) {
        foreach ($darr as $a_key => $a_value) {
          if ($i == $a_key){
            $del[] = $value;
          }
        }
      }
    }
    delete_sql($del);
  }

  $sql = "select * from php_test limit 10 offset $offset";
  $stmh = $pdo -> prepare($sql);
  $stmh->execute();
  $count = $stmh->rowCount();


  for($i = 0;$i < $count;$i++){
    $key = $i."";
    echo "<tr>";
    echo '<td> <span class="mdl-list__item-secondary-action">
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
    <input type="checkbox" id="" class="mdl-checkbox__input checknum" onclick="clickcheck()" name="btn['.$i.']" value=""/>
    </label>
    </span></td>';
    $datalist = ($stmh->fetch(PDO::FETCH_ASSOC));
    foreach ($datalist as $key => $value) {
      echo "<td> $value </td>";
    }
    echo "</tr>";
  }

 ?>
