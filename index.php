<?php
 include_once('header.html');
?>
<form action="login.php" method="post">
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Server URL:</div>
      <input type="text" class="form-control" name="url">
    </div><br>
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Workspace Name:</div>
      <input type="text" class="form-control" name="workspace">
    </div><br>
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Client ID:</div>
      <input type="text" class="form-control" name="client_id">
    </div><br>
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Client Secret:</div>
      <input type="text" class="form-control" name="client_secret">
    </div><br>
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Username:</div>
      <input type="text" class="form-control" name="user">
    </div><br>
    <div class="input-group col-xs-6">
      <div class="input-group-addon">Password:</div>
      <input type="password" class="form-control" name="password">
    </div><br>
    <input class="btn btn-info" type="submit" value="Login"><br>
</form>
<?php
 include_once('footer.html');
?>
