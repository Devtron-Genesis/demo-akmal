<?php
require_once('config.php');
session_start();
if (isset($_POST['submit'])) {
    $q_id = trim($_POST['id']);
    $answer = trim($_POST['answer']);
    $sql = "INSERT INTO answers (q_id, answer) VALUES (:q_id, :answer)";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":q_id", $param_q_id);
        $stmt->bindParam(":answer", $param_answer);
        $param_q_id = $q_id;
        $param_answer = $answer;
        if ($stmt->execute()) {
            $_SESSION['success'] = "The relative answer to the question is submited successfully!";
            header("location: all-questions.php");
            exit();
        } else {
            $_SESSION['error'] = "Something went wrong. Please try again later.";
            header("location: all-questions.php");
            exit();
        }
    }
    unset($stmt);
    unset($pdo);
}
?>