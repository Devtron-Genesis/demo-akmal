<?php
require_once('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = trim($_POST['id']);
    $cat_id = trim($_POST['cat_id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $question = trim($_POST['question']);
    $sql = "UPDATE faq SET cat_id=:cat_id, name=:name, email=:email, question=:question WHERE id=:id";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":cat_id", $param_cat_id);
        $stmt->bindParam(":name", $param_name);
        $stmt->bindParam(":email", $param_email);
        $stmt->bindParam(":question", $param_question);
        $stmt->bindParam(":id", $param_id);
        $param_cat_id = $cat_id;
        $param_name = $name;
        $param_email = $email;
        $param_question = $question;
        $param_id = $id;
        if ($stmt->execute()) {
            echo "Question updated successfully!";
            header("location: all-questions.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    unset($pdo);
}
unset($pdo);
?>