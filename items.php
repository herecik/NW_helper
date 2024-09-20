<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Needed items</title>
</head>
<body>
    <?php include('nav_bar.php') ?>

    <form action="" method="post">

    <input type="text" name="test" id="">
    <input type="submit" value="Submit">
    </form>

    <?php if(isset($_POST['test'])){
                        $_SESSION["information"] = $_POST['test'];

                    echo $_SESSION["information"]."cool";
                    }?>
</body>
</html>