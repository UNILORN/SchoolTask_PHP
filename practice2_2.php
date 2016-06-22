<?php
  require __DIR__."/practice2_function.php";

        if (!empty( $_POST["listname"])){
          write_sql($_POST["listname"]);
        }


          // if (!isset( $_SESSION["list"])){
          //    $_SESSION["list"] = [];
          // }
          // if (!isset( $_SESSION["check"])){
          //    $_SESSION["check"] = [];
          // }
          // if (!isset($_POST["btn"])){
          //   $_POST["btn"] = [];
          // }
          // if (!empty($_POST["listname"])){
          //   $_SESSION["list"][] = $_POST["listname"];
          //   writesql($_POST["listname"]);
          // }
          //
          // if (empty($_POST["delete"])){
          //   $_POST["delete"] = 1;
          // }
          // if (empty($_POST["btn"])){
          //   $_POST["btn"] = [];
          // }
          //
          // if ($_POST["delete"] == "DeleteList"){
          //   $listnum = $_SESSION["list"];
          //   $count =  $_POST["btn"];
          //   foreach ($listnum as $l_key => $l_value){
          //     foreach ($count as $c_key => $c_value){
          //       if ($l_key == $c_key){
          //         unset($listnum[$l_key]);
          //       }
          //     }
          //   }
          //   $_SESSION["list"] = array_values($listnum);
          //
          // }
          //
          // $check = [];
          // $listnum = $_SESSION["list"];
          // $count =  $_POST["btn"];
          // if (!empty($count)){
          //   foreach ($listnum as $l_key => $l_value){
          //     foreach ($count as $c_key => $c_value){
          //       if (empty($count[$c_key])){
          //         $check[$c_key] = "checked";
          //       }
          //       else{
          //         $check[$l_key] = null;
          //       }
          //     }
          //   }
          // }
          //
          // $_SESSION["check"] = $check;
    //
    //       $listnum = $_SESSION["list"];
    //       foreach ($listnum as $key => $value){
    //         echo "<tr>";
    //         echo '<td> <span class="mdl-list__item-secondary-action">
    //   <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
    //     <input type="checkbox" id="" class="mdl-checkbox__input checknum" onclick="clickcheck()" name="btn['.$key.']" value="" '.$check[$key].'/>
    //   </label>
    // </span></td>';
    //         echo "<td> " . ($key + 1) . " </td><td> $value </td><tr>";
    //
    //       }
 ?>
