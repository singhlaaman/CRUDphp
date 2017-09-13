<?php
    global $connection;

    $query = mysqli_query($connection, "SELECT * FROM signup");
    $user_count = mysqli_num_rows($query);

    $query = mysqli_query($connection, "SELECT * FROM profile");
    $verified_users = mysqli_num_rows($query);

    $query = mysqli_query($connection, "SELECT * FROM signup WHERE is_active = '0'");
    $not_verified_users = mysqli_num_rows($query);


?>
     

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            
            <?php
                $text = ['Total Users', 'Verified Users', 'Not Verified Users'];
                $numbers = [$user_count, $verified_users, $not_verified_users];
            
                for($i=0; $i < count($numbers); $i++){
                    echo "['{$text[$i]}'" . "," . "{$numbers[$i]}], ";
                }
            
            ?>
            
          
        ]);

        var options = {
          chart: {
            title: 'Graphical Representation of CRUD Application',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
</script>