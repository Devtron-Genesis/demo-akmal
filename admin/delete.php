<?php
require_once('config.php');
$id = trim($_GET['id']);
$sql = "DELETE FROM faq WHERE id = :id";
if ($stmt = $pdo->prepare($sql)) {
    $stmt->bindParam(":id", $param_id);
    $param_id = $id;
    if ($stmt->execute()) {
        header("location: all-questions.php");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
unset($stmt);
unset($pdo);
?>