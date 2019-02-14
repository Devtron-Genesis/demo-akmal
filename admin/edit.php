<?php
require_once('header.php');
require_once('config.php');
$id = trim($_GET['id']);
try {
    $sql = "SELECT * FROM categories";
    $categories = $pdo->query($sql);
    $i=0;
    $cat_name = array();
    $cat_ids = array();
    foreach ($categories as $item) {
      $cat_name[$i] = $item['name'];
      $cat_ids[$i] = $item['id'];
      $i++;
    }
    $sql = "SELECT * FROM faq WHERE id = :id";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":id", $param_id);
        $param_id = $id;
        if ($stmt->execute()) {
            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $question = $row['question'];
                $cat_id = $row['cat_id'];
                $name = $row['name'];
                $email = $row['email'];
            } else {
                header("location: error.php");
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
        <h1 class="h3 mb-2 text-gray-800">Edit Question</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <form action="edit-question-processing.php" method="post" class="user">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?=$name?>" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="<?=$email?>" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="question" id="customTextarea" rows="4" class="form-control" required placeholder="Question?"><?=$question?></textarea>
                    </div>
                    <div class="form-group">
                        <select name="cat_id" class="form-control" required>
                            <option disabled selected value="0">-Select Category-</option>
                            <?php for ($i=0; $i < count($cat_name); $i++) { ?>
                                <option <?php if ($cat_ids[$i] == $cat_id) {
                                    echo "selected";
                                } else {
                                    echo "";
                                } ?> value="<?=$cat_ids[$i]?>">
                                <?php echo $cat_name[$i] ?>
                                </option>
                           <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update Question" class="btn btn-success">
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