<?php

function e($value ){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
$pdo = new PDO('mysql:host=localhost;dbname=note_app', 'root', '',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id');
$stmt->bindValue('id', 7);
$stmt->bindValue('content', 'This is updated content');
$stmt->bindValue('title', 'This is updated title');
$stmt->execute();

$id = 8;
$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
$stmt2->bindValue('id', $id);
$stmt2->execute();