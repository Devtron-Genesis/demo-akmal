<?php
require_once('config.php');
session_start();
$id = trim($_GET['id']);
$sql = "DELETE FROM faq WHERE id = :id";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":id", $param_id);
        echo $id;
        $param_id = $id;
        if ($stmt->execute()) {
            $_SESSION['success'] = "Question deleted Successfully!";
            header("location: all-questions.php");
            exit();
        } else {
            $_SESSION['error'] = "Oops! Something went wrong. Please try again later.";
            header("location: all-questions.php");
            exit();
        }
    }
    unset($stmt);   
unset($pdo);
?>