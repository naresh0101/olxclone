<?php 
session_start();
require_once('../../private/initialize.php'); 

$alert = 'alert alert-success d-none';
if(is_get_request() and $_GET['status'] == 'success'){
  $msg = 'Post uploaded Successfully!!';
  $alert = 'alert alert-info';
}
if(is_get_request() and $_GET['status'] == 'unsuccess') {
    $msg = 'Post uploaded Successfully!!';
    $alert = 'alert alert-danger';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Ad</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
              <button type="button" id="sidebarCollapse" class="btn btn-info">
                  <i class="fas fa-align-left"></i>
                 <a style="color:white" href="../home.php"><span>Back</span></a>
              </button>
         </div>
</nav>
<div class="container" style="margin-top:100px">
<center >
<div class="login-page">

<div class="card text-center col-sm-8">
<div class="mt-4 <?php echo $alert; ?> ">
    <?php echo $msg; ?> 
</div>
  <form class="row p-2" action="../../private/controler/product.php?actionis=postad" method="POST" enctype="multipart/form-data">
      
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="text" name="title" placeholder="Title ....." maxlength="100">
    </div>
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="text" name="product" placeholder="Product ....." maxlength="50">
    </div>
     <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="text" name="brand" placeholder="Brand ....." maxlength="60">
    </div>
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="number" name="modelyear" placeholder="Model year..." >
    </div>
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="text" name="location" placeholder="Location..." maxlength="80">
    </div>
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="number" name="price" placeholder="Price..." >
    </div>
    <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="text" name="color" placeholder="Color ... " maxlength="30">
    </div>
     <div class="col-sm-6 mt-2">
        <input required class="form-control form-control-sm" type="email" name="postedby" value=" <?php echo $_SESSION['email'] ?> " placeholder="posted by" maxlength="30">
    </div>
    <div class="col-sm-12 mt-2 mb-2" maxlength="150">
        <textarea  class="form-control form-control-sm" type="text" name="description" placeholder="Description ... "></textarea>
    </div>
    <div class="col-sm-6 mx-2 mt-2 mb-2">
        <input required type="file"  enctype="multipart/form-data" class="custom-file-input required rm-control form-control-sm" name="image">
        <label class="custom-file-label" for="customFile">image </i></label>
    </div>
    <button type="submit" class="btn btn-info mx-2 mt-2 col-sm-5">
           Post
    </button>
  </div>
    
</form>
</div>
</center>

</div>
</body>
</html>