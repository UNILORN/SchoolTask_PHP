
 <table class="mdl-shadow--2dp">
   <thead>
     <tr>
       <th class="mdl-data-table__cell--non-numeric">
         <a href="?page=<?php echo $page-1?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-button--colored">
           Prev
         </a>
       </th>
       <th>
     <?php
     $sql = "select * from php_test";
     $stmh = $pdo -> prepare($sql);
     $stmh->execute();
     $count = $stmh->rowCount();

     for ($i = 0;$i < $count;$i += 10){
       if((($i/10)+1) == $page){
         $button = "mdl-button--raised mdl-button--accent";
       }
       else{
         $button = "mdl-button--primary";
       }
        $moji = '<th>
          <a href="?page='.(($i/10)+1).'" class="mdl-button mdl-js-button '.$button.'">
            '.(($i/10)+1).'
          </a>
        </th>';

        echo $moji;
     }
      ?>
       </th>
       <th>
         <a href="?page=<?php echo ceil($count/10) ?>" class="mdl-button mdl-button--raised mdl-js-ripple-effect  mdl-button--colored">
           Last
         </a>
       </th>
     </tr>
   </thead>
 </table>
