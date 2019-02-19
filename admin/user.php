<?php
require_once('header.php');
// Include config file
require_once('config.php');
?>
<!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Users</h1>
          <hr>
          <?php
          flash_messages();
          ?>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php
                  // Attempt select query execution
                  $sql = "SELECT * FROM user";
                  if ($result = $pdo->query($sql)) {
                      if ($result->rowCount() > 0) {
                          echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Email</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = $result->fetch()) {
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
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