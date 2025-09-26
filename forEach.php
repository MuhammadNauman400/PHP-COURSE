<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $categories = [
        'programming',
        'business',
        'arts',
        'self improve',
        'history'
    ];

    foreach ($categories as $category) {
        var_dump($category);
    }


    ?>

    <br>
    <br>
    <br>

    <!-- Another method of using foreach -->

    <ul>
        <?php foreach ($categories as $category): ?>
            <li>

                <?php echo $category;  ?>
            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>