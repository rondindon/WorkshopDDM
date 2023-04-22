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

    <section class="news-article">

        <div class="article-container">

            <a href="/ddm-wix/final/_inc/member.php?news=destroy"> < Back </a>

            <h1><?php echo $_SESSION['title'] ?></h1>

            <img src="<?php echo $_SESSION['img'] ?>">

            <p><?php echo $_SESSION['author'] ?></p>

            <p><?php echo $_SESSION['date'] ?></p>

            <p><?php echo $_SESSION['desc'] ?></p>

            <div class="next">
                <?php
                if($_SESSION['newsID'] == 6){
                    $next = 1;
                }else{
                    $next = $_SESSION['newsID'] + 1;
                }

                if($_SESSION['newsID'] == 1){
                    $previous = 6;
                }else{
                    $previous = $_SESSION ['newsID'] - 1;  
                }
                ?>
                <a href="/ddm-wix/final/_inc/member.php?newsID=<?php echo $previous; ?>">Previous</a>
                <a href="/ddm-wix/final/_inc/member.php?newsID=<?php echo $next; ?>">Next</a>
            </div>

        </div>

    </section>

    <?php include '../../_inc/footer.php' ?>
</body>
</html>