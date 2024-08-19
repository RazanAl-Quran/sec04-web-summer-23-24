<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo $_GET;
    print_r($_POST);
    ?>

    <h1>
        Hello 
        <?php echo $_POST['username']?> and your ID id  <?php echo $_POST['id']?> 
    </h1>

    <?php
    echo "<h2>" . $_POST['username'] . " and Your id is" . $_POST['id'] . "</h2>";
    ?>


</body>

</html>