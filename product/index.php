<?php 

include_once "./data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz 16 product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="product ">
        <div class="container">
            <div class="row">

                <?php foreach($product as $product) { ?>

                <div class="col-md-3 my-5">
                    <div class="card">
                        <img src="<?php echo $product['photo'];?>" alt="" class="card-img">
                    </div>
                    <div class="card-body">
                        <h6><?php echo $product['name'];?></h6>
                        <h6><?php echo $product['price'];?></h6>
                        <p><?php echo $product['rating'];?></p>
                        <p><?php echo $product['ogin'];?></p>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
    
</body>
</html>