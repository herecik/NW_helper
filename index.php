<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Wolrd helper</title>
</head>
<body>
    <?php include('nav_bar.php') ?>

    <?php 
session_unset();
session_destroy();
?>
</body>
</html>