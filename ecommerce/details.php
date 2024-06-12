<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUNS AND AMMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include './partials/connect.php'?>
<?php include './partials/header.php'?>

<?php 
$id=$_GET['details_id'];
$sql="select * from `guns` where category_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$category_id = $row['category_id'];
                $category_name = $row['category_name'];
                $category_desc = $row['category_desc'];
                $category_image = $row['category_image'];
                $category_price = $row['category_price'];
                
?>
<div class="jumbotron">
    <div class="container">
    <h1 class="display-4 text-center text-primary"><?php echo $category_name?></h1>
  <p class="lead"><?php echo $category_desc?></p>
    <button class=btn btn-dark>
    <a class="btn btn-dark" href="index.php" role="button">Continue shopping</a>
    </button>
</div>
</div>
<div class="conatiner">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src=<?php echo $category_image ?> alt="" class="img-fluid max-width: 200%; and height: auto;">
        </div>
        <div class="col-lg-6 col-sm-12">
               <h2>
               <p><?php echo $category_desc?></p>
               <p><strong>Price: </strong><?php echo $category_price?>/-</p>
               </h2>
               <button class="btn btn-success">Add to cart</button>
            </div>
    </div>
</div>
<?php include './partials/footer.php'?>
</body>
</html>