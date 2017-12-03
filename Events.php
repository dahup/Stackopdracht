<?php
include_once 'header.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <section class="main-container">
            <div class="main-wrapper">
                <h2>Events</h2>
                
                
                
                <br>
                  <br>
                    <br>
                    <script>
                    $(document).ready(function(){
                    $("button").click(function(){
                    $(".test").slideToggle (3000);
                          });
                    });
                    </script>
                    <center><button><img class="test" src="IMG/download.png"></button></center> 
                    
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo "You are logged in";
                        
                    }
                    
                    ?>
                    <head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
                    
<body>
    <div class="container">
            <div class="row">
                <h3>These are our upcoming events</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Create new event</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name Event</th>
                          <th>Chef</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM customers ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
                                echo '<td>'. $row['mobile'] . '</td>';
                                echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
<?php
include_once 'footer.php';

?>
