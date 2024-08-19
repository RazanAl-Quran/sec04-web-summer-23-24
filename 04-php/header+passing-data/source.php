<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> source page </h1>
    <?php
    $name = "Yazan";
    $id = 20090;
    header("Location:destination.php?name2=$name&id2=$id");
    ?>
</body>

</html>