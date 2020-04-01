
<?php require_once('../private/controler/getproducts.php') ?>
<div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
              <button type="button" id="sidebarCollapse" class="btn btn-info">
                  <i class="fas fa-align-left"></i>
              </button>
         </div>
        <form class="form-inline">
            <div class="input-group">
            <input type="text" id="searchPro" class="form-control" placeholder="search..." required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info">
                  <i class="fas fa-search"></i>
                </button>
            </div>
            </div>
        </form>
    </nav>

    <div class="row" id="products">
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <a href="../public/product/view.php?id=<?php echo $row['id'];?> " class="card col-sm-3 m-3">
          <img class="card-img-top" src="<?php echo "../public/images/".$row['image']; ?>" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title"><?php echo $row['product']; ?></h5>
              <hr>
              <p class="small"><?php echo $row['title']; ?></p>
          <button type="button" class="btn btn-outline"><?php echo "₹. ".$row['price']; ?></button>
          </div>
        </a>
        <?php } ?>
    </div>
      </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


$(document).ready(function(){
  $("#searchPro").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#products div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>