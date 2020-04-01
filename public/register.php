<?php 
require_once('../private/initialize.php');
require_once('../private/model/table.php');
$alert = 'd-none';
if($_GET['user'] == 'exists'){
  $msg = 'email already in use!!';
  $alert = '';

}

?>

<div class="login-page">
<div class="alert alert-danger <?php echo $alert; ?> ">
    <?php echo $msg; ?> 
</div>
  <div class="form">
   <h1>Only best</h1> 
    <form class="login-form" method="post" action="../private/controler/user.php?actionis=register">
      <input type="text" name="username" placeholder="Full name" required />
      <input type="email" name="email" placeholder="email" required />
      <input type="password" name="password" placeholder="password" required />
      <button type="submit">Register</button>
    </form>
  </div>
</div>