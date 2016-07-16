
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TESTPAGE</title>
    <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="practice2.css" charset="utf-8">
    <script src="./practice2.js"></script>


  </head>

  <body>
    <h1>TO DO LIST</h1>

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" id="navaddlist">
            <li class="active"><a class="falselink">List 1<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li><a class="falselink" onclick="dolistadd()">+ADD</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="progress-size">
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-list">
          </div>
          <span class="sr-only">50% Complete (success)</span>
        </div>
      </div>
    </div>

    <form class="checklist" method="post">
      <div class="allcheck">
        <label class="allcheck_l mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <input type="checkbox" class="mdl-checkbox__input allcheck_i" onclick="allcheckclick()" value=""/>
        </label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input listname" type="text" id="sample3" name="listname">
        <label class="mdl-textfield__label">Add...</label>
      </div>
      <button type="submit" name="name" value="AssList" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" id="addbutton">
        <i class="material-icons">add</i>
      </button>
      <button type="submit" name="delete" value="DeleteList" class="mdl-button mdl-js-button mdl-button--fab" id="deletebutton">
        <i class="material-icons">clear</i>
      </button>
      <button onclick="record()" type="button" value="rec" class="mdl-button mdl-js-button mdl-button--accent" id="deletebutton">
        <i class="material-icons">settings_voice</i>
      </button>

      <div class="recordmonitor mdl-card mdl-shadow--2dp mdl-card--border">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Record OK?</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <input type="text" class="mdl-textfield__input record_text" name="recodename">
        </div>
        <button onclick="fadefade()" type="button" name="name" value="AssList" class="mdl-button mdl-js-button mdl-button--raised" id="addbutton">
          Close
        </button>
        <button onclick="fadefade()" type="submit" name="name" value="AssList" class="mdl-button mdl-js-button mdl-button--raised" id="addbutton">
          OK
        </button>
      </div>


    <table class="table table-bordered mdl-shadow--2dp">
      <tr>
        <td></td>
        <td><b>id</b></td>
        <td><b>name</b></td>
        <td><b>create_at</b></td>
        <td><b>updated_at</b></td>
        <td>Change</td>
      </tr>

      <?php
        require __DIR__."/practice2_function.php";
        require __DIR__."/practice2_sql.php";
       ?>
     </form>
    </table>

    <?php
      require __DIR__."/practice2_pager.php";
     ?>
  </body>
</html>
