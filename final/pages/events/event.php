<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['title'] ?></title>
    <link rel="stylesheet" href="/ddm-wix/final/styles/main/style.css">
</head>
<body>
    <?php include '../../_inc/header.php' ?>

    <section class="event">

        <div class="event-container">

            <p><?php  echo $_SESSION['date'] ?></p>

            <h1><?php  echo $_SESSION['title'] ?></h1>

            <p><?php  echo $_SESSION['desc'] ?></p>

            <button>Tickets are not on sale</button>

            <img src="<?php  echo $_SESSION['img'] ?>">

            <div class="time">

                <h2>Time & Location</h2>

                <p><?php  echo $_SESSION['time'] ?></p>

            </div>
            
            <div class="map">

                <?php  echo $_SESSION['map'] ?>

            </div>

        </div>

    </section>

    <?php include '../../_inc/footer.php' ?>
</body>
</html>