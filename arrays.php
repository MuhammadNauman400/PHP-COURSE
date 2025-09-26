<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $categories = array('programming', 'business', 'arts');
    $categories = ['programming', 'business', 'arts'];
    var_dump($categories);
    echo $categories[0] ."<br>";
    echo $categories[1] ."<br>";
    echo $categories[2] ."<br>";

    ?>
</body>
</html>

<!-- in_array('value','arrayname') to find specific keys in an array -->
<!-- var_dump(isset) -->
<!-- var_dump(empty) to find specific values in an array. -->
<!-- unset($categories[2]) to remove an entry from an array. Recommend to avoid unset -->
