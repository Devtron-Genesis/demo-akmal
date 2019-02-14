<?php
require_once('config.php');
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
            header("location: all-questions.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    unset($stmt);
    unset($pdo);
}
?>