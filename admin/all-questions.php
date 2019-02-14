<?php
require_once('header.php');
// Include config file
require_once('config.php');
$sql = "SELECT * FROM categories";
$categories = $pdo->query($sql);
$i=0;
$cat_name = array();
$cat_ids = array();
foreach ($categories as $item) {
  $cat_name[$i] = $item['name'];
  $cat_ids[$i] = $item['id'];
  $i++;}
?>
<!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Questions</h1>
          <hr>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php
                  // Attempt select query execution
                  $sql = "SELECT * FROM faq";
                  if ($result = $pdo->query($sql)) {
                      if ($result->rowCount() > 0) {
                          echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Question</th>";
                                    echo "<th>Category</th>";
                                    echo "<th>User Name</th>";
                                    echo "<th>User Email</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = $result->fetch()) {
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['question'] . "</td>";
                                    for ($i=0; $i < count($cat_name); $i++) { 
                                        if ($row['cat_id'] == $cat_ids[$i]) {
                                            echo "<td>" . $cat_name[$i] . "</td>";
                                        }
                                    }
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>";
                                        echo "<a href='edit.php?id=". $row['id'] ."' class='btn btn-success mr-3' title='Edit Question' data-toggle='tooltip'><span class='fas fa-fw fa-edit'></span></a>";
                                        echo "<a href='delete.php?id=". $row['id'] ."' class='btn btn-danger mr-3' title='Delete Question' data-toggle='tooltip' onclick='javascript:confrimationDelete($(this));return false;'><span class='fas fa-fw fa-trash'></span></a>";
                                        echo "<a href='answer.php?id=". $row['id'] ."' class='btn btn-info' title='Answer the Question' data-toggle='tooltip'><span class='fas fa-fw fa-clipboard-check'></span></a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                          echo "</table>";
                      }
                  }
                  ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
require_once('footer.php');
?>