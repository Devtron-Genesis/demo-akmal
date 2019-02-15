<?php
require_once('config.php');
session_start();
if (isset($_POST['answer-submit'])) {
    $id = trim($_POST['id']);
    $answer = trim($_POST['answer']);
    $sql = "UPDATE answers SET answer=:answer WHERE id=:id";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":answer", $param_answer);
        $stmt->bindParam(":id", $param_id);
        $param_answer = $answer;
        $param_id = $id;
        if ($stmt->execute()) {
            $_SESSION['success'] = "Answer to the relative question is updated successfully!";
            header("location: all-answers.php");
            exit();
        } else {
            $_SESSION['error'] = "Something went wrong. Please try again later.";
            header("location: all-answers.php");
            exit();
        }
    }
    unset($pdo);
}
unset($pdo);
?>