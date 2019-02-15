<?php
require_once('header.php');
// Include config file
require_once('config.php');
$sql = "SELECT id,question FROM faq";
$faq = $pdo->query($sql);
$i=0;
$faq_ids = array();
$faqs = array();
foreach ($faq as $item) {
    $faq_ids[$i] = $item['id'];
    $faqs[$i] = $item['question'];
  $i++;}
?>
<!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Answers</h1>
          <hr>
          <?php
          flash_messages();
          ?>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Answers</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php
                  // Attempt select query execution
                  $sql = "SELECT * FROM answers";
                  if ($result = $pdo->query($sql)) {
                      if ($result->rowCount() > 0) {
                          echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Question</th>";
                                    echo "<th>Answer</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = $result->fetch()) {
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    for ($i=0; $i < count($faq_ids); $i++) { 
                                        if ($row['q_id'] == $faq_ids[$i]) {
                                            echo "<td>" . $faqs[$i] . "</td>";
                                        }
                                    }
                                    echo "<td>" . $row['answer'] . "</td>";
                                    echo "<td>";
                                        echo "<a href='edit-answer.php?id=". $row['id'] ."' class='btn btn-success mr-3' title='Edit Answer' data-toggle='tooltip'><span class='fas fa-fw fa-edit'></span></a>";
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