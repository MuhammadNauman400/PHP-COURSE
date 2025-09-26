<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $courses = [
        [
            "name" => "ABC",
            "desc" => "ghghhghghghghghghgh"
        ],
        [
            "name" => "DEF",
            "desc" => "uiuiuiuiuiuiuiui"
        ]
    ];

    foreach ($courses as $course) {
        echo "Course: " . $course["name"] . "<br>";
        echo "Description: " . $course["desc"] . "<br><br>";
    }

    ?>

    <!-- using html list -->
    <br>
    <br>
    <br>

    <ul>
        <?php foreach ($courses as $course): ?>
            <li>
                <strong><?php echo $course["name"]; ?></strong>:
                <?php echo $course["desc"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>