<?php
require_once('header.php');
require_once('config.php');
$id = trim($_GET['id']);
$sql = "SELECT name,question FROM faq WHERE id = :id";
if ($stmt = $pdo->prepare($sql)) {
    $stmt->bindParam(":id", $param_id);
    $param_id = $id;
    if ($stmt->execute()) {
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row['name'];
            $question = $row['question'];
        } else {
            header("location: error.php");
            exit();
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
unset($stmt);
unset($pdo);
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Answer the Question</h1>
        <hr>
        <p class="h4 mb-2">User Name: <span class="text-gray-800"><?=$name?></span></p>
        <p class="h4 mb-2">Question: <span class="text-gray-800"><?=$question?></span></p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <form action="answer-processing.php" method="post" class="user">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                    </div>
                    <div class="form-group">
                        <textarea name="answer" rows="7" class="form-control" placeholder="Answer the question."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Publish Answer" class="btn btn-success">
                        <a href="all-questions.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>