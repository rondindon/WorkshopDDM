<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="/ddm-wix/final/styles/main/style.css">
</head>
<body >
    <?php include 'header.php'  ?>
    <section class="desc-container">
        
        <div class="member-desc">

            <a href="member.php?destroy=1"> < Back</a>

            <div class="content">

                <div class="desc">

                    <h1><?php echo $_SESSION['name'] ?></h1>
                    <h3><?php echo $_SESSION['assoc'] ?></h3>

                    <p><?php echo $_SESSION['desc'] ?></p>

                </div>

                <div class="img">

                    <img src="<?php echo $_SESSION['src'] ?>" alt="member">

                </div>

            </div>

        </div>
    </section>
    <?php include 'footer.php'  ?>
</body>
</html>