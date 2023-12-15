<?php

session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=tasks;", "root", "");

$sql = "SELECT * FROM my_table WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    $message = "Все ок, брат! И вообще ты красавчик! Молодец!!!";
    $_SESSION['danger'] = $message;

    header("Location: ../task_11.php");
    exit;
}

$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: ../task_11.php");