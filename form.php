<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_GET);
    var_dump($_POST);
    ?>
    <form action="POST.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>