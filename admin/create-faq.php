<?php
require_once("config.php");
session_start();
$name = $email = $question = $cat_id = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cat_id = trim($_POST["cat_id"]);
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $question = trim($_POST["question"]);
    // Prepare an insert statement
    $sql = "INSERT INTO faq (cat_id, name, email, question) VALUES (:cat_id, :name, :email, :question)";
    if ($stmt = $pdo->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":cat_id", $param_cat_id);
        $stmt->bindParam(":name", $param_name);
        $stmt->bindParam(":email", $param_email);
        $stmt->bindParam(":question", $param_question);
        // Set parameters
        $param_cat_id = $cat_id;
        $param_name = $name;
        $param_email = $email;
        $param_question = $question;
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            $_SESSION['success'] = "Thanks. We will review your question and respond as soon as possible.";
            header("location: ../index.php");
            exit();
        } else {
            $_SESSION['error'] = "Something went wrong. Please try again later.";
            header("location: ../index.php");
            exit();
        }
    }
    // Close statement
    unset($stmt);
    // Close connection
    unset($pdo);
}
?>