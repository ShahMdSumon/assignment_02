<?php

include_once"./data.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Developer Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">

            <?php foreach ($skill as $skill) { ?>

            <div class="col-md-3 my-5">
                <div class="card">
                    <img style="height:200px; object-fit:cover" src="<?php echo $skill['photo'];?>" alt="" class="card-img">
                </div>
                <div class="card-body">
                    <h3><?php echo $skill['name']; ?></h3>
                    <h4><?php echo $skill['age']; ?></h4>
                    <h5><?php echo $skill['expart']; ?></h5>
                    <p><?php echo $skill['des']; ?></p>

                </div>

            </div>
            <?php }?>

        </div>
    </div>




    
</body>
</html>