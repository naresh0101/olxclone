<?php
require_once('../../private/shared/head.php');
require_once('../../private/controler/product.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <a style="color:white" href="../home.php"><span>Back</span></a>
            </button>
    </div>
</nav>

<div class="container" style="margin-top:100px;">
    <?php while($row = $result->fetch_assoc()) { ?>
    <div class="row">
         <div class="col-sm-6">
            <h4 class="text"><?php echo $row['title']; ?></h4>
            <img class="card-img-top" src="../images/<?php echo $row['image']; ?>" />
        </div>
    
        <div class="phonedetails col-sm-6">
            <div class="d-flex flex-decoration-row"> <h5 class="text-primary">Seller <?php echo $row['post_by']; ?></h5></div>
        <hr/>

        <h5><?php echo $row['product']; ?></h5>        
        <ul>
            <li>Price: <?php echo "₹. ".$row['price']; ?></li>
            <li>Brand: <?php echo $row['brand']; ?></li>
            <li>Model: <?php echo $row['modal']; ?> Year</li>
            <li>Posted Date : <?php echo $row['reg_date']; ?></li>
            <li>Location : <?php echo $row['location']; ?></li>
            <li>Color : <?php echo $row['color']; ?></li>


        </ul>
        <p class="text-secondary"><?php echo $row['description']; ?></p>
        <div> 
        </div>
        </div>       
    </div>
<?php } ?> 

</div>  