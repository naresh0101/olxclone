<?php 
require_once('../private/initialize.php');
$alert = 'd-none';
if($_GET['validation'] == 'error'){
  $msg = 'Invalid cridentials !!';
  $alert = '';
}
?>
<div class="login-page">
<div class="alert alert-danger <?php echo $alert; ?> ">
    <?php echo $msg; ?> 
</div>
  <div class="form">
   <h1>Only best</h1> 
    <form class="login-form" method="post" action="../private/controler/user.php?actionis=login">
      <input required type="email" name="email" placeholder="email" required/>
      <input required type="password" name="password" placeholder="password" required/>
      <button>login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>