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
    
    <h1 class="text-center text-primary my-3">Welcome to GUNS AND AMMO</h1>
    <div class="container">
        <div class="row">
        <!-- PHP code -->
        <?php 
        $sql = "SELECT * FROM `guns`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $category_id = $row['category_id'];
                $category_name = $row['category_name'];
                $category_desc = $row['category_desc'];
                $category_image = $row['category_image'];
                $category_price = $row['category_price'];
                
                echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-5">
                        <div class="card">
                            <img src="' . $category_image . '" class="card-img-top" alt="' . $category_name . '" style="height:300px;object-fit:contain">
                            <div class="card-body">
                                <h5 class="card-title">' . $category_name . '</h5>
                                <p class="card-text">' . substr($category_desc,0,100) .'...</p>
                                <p class="card-text">Price: ₹' . $category_price . '/-</p>
                                <a href="details.php?details_id=' . $category_id . '" class="btn btn-primary">Shop now</a>
                            </div>
                        </div>
                    </div>';
            }
        }
        ?>
        </div>
    </div>
    <?php include './partials/footer.php'?>
</body>
</html>
