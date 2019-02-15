<?php
require_once('header.php');
require_once('config.php');
$id = trim($_GET['id']);
try {
    $sql = "SELECT id,question FROM faq";
    $faq = $pdo->query($sql);
    $i=0;
    $faq_ids = array();
    $faqs = array();
    foreach ($faq as $item) {
        $faq_ids[$i] = $item['id'];
        $faqs[$i] = $item['question'];
      $i++;}
    $sql = "SELECT * FROM answers WHERE id = :id";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":id", $param_id);
        $param_id = $id;
        if ($stmt->execute()) {
            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $q_id = $row['q_id'];
                $answer = $row['answer'];
            } else {
                header("location: 404.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    // Close statement
    unset($stmt);
        
    // Close connection
    unset($pdo);
  } catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Answer</h1>
        <hr>
        <p class="h4 mb-2">Question: <span class="text-gray-800">
            <?php
            for ($i=0; $i < count($faq_ids); $i++) { 
                if ($faq_ids[$i] == $q_id) {
                    echo $faqs[$i];
                }
            }
            ?>
        </span></p>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <form action="edit-answer-processing.php" method="post" class="user">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                    </div>
                    <div class="form-group">
                        <textarea name="answer" id="customTextarea" rows="4" class="form-control" required placeholder="Answer"><?=$answer?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="answer-submit" value="Update Answer" class="btn btn-success">
                        <a href="all-answers.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>