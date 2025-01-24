<?php

require_once "./connection.php";

$months = $festival->getMonths();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myanmar-months</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row mt-4">
            <h2 class="text-center">မြန်မာလများ</h2>
        </div>




        <div class="row d-flex justify-content-around mt-4 ">

            <?php foreach ($months as $month) : ?>

                <?php if ($month['Id'] == $_GET['id']) : ?>

                    <div class="card w-75 p-2 description" style="width: 18rem;">
                        <a href="index.php" class="text-dark ms-4 "><i class="fa-solid fa-circle-arrow-left fs-5"></i></a>
                        <img src="<?php echo $month['FestivelImg'] ?>" class="card-img-top rounded w-50 ms-3 mt-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $month['MonthMm'] ?>[<?php echo $month['MonthEn'] ?>]</h5>
                            <h6><?php echo $month['FestivalMm'] ?>[<?php echo $month['FestivalEn'] ?>]</h6>
                            <br>
                            <p class="card-text"><?php echo $month['Description'] ?></p>
                            <p class="card-text"><?php echo $month['Detail'] ?></p>

                        </div>
                    </div>



                <?php endif; ?>



            <?php endforeach; ?>



        </div>
    </div>

</body>

</html>