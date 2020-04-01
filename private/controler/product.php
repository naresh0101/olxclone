<?php 
ob_start();
// session_start();
$action = $_GET['actionis'];
require_once('../../private/initialize.php');

if(is_post_request() and $action == 'postad'){
    $postedby = $_SESSION['email'];
    if($_POST['title'] != NULL){ $title = $_POST['title']; }
    if($_POST['product'] != NULL){ $product = $_POST['product']; }
    if($_POST['brand'] != NULL){ $brand = $_POST['brand']; }    
    if($_POST['modelyear'] != NULL){ $modal = $_POST['modelyear'];  }    
    if($_POST['location'] != NULL){ $location = $_POST['location'];}        
    if($_POST['price'] != NULL){ $price = $_POST['price']; }        
    if($_POST['color'] != NULL){ $color = $_POST['color']; }           
    if($_POST['description'] != NULL){ $description = $_POST['description']; }           

    $errors= array();
    $file_name = time().$_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
    if(empty($errors)==true){
      move_uploaded_file($file_tmp,"../../public/images/".$file_name);
      $image = $file_name;
      $postad = " INSERT INTO  products (post_by,title,product,brand, modal,location,price,color,image,description) values ('$postedby','$title','$product','$brand', '$modal','$location','$price','$color','$image','$description')";
      if(!mysqli_query($db,$postad)){
        header('location:' . '../../public/product/new.php?status=unsuccess');
      }else{
        header('location:' . '../../public/product/new.php?status=success');
      }
    }else{
        header('location:' . '../../public/product/new.php?status=unsuccess');
    } 
}

if(is_get_request() && $_GET['id']){
  $id = $_GET['id'];
  $s = " SELECT * FROM products where id = '$id' ";
  $result = mysqli_query($db,$s);
}
?>

