<div align="center">


       <?php  
 $connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "SELECT pourcentage, count(*) as number FROM promotion GROUP BY pourcentage";  
 $result = mysqli_query($connect, $query);  
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['pourcentage', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["pourcentage"]."', ".$row["number"]."],";  
                          }  
                          ?>  
        ]);

        var options = {
          title: 'Le Nombre des Promotions selon Les Pourcentages'
        };

        var chart = new google.visualization.BarChart(document.getElementById('bar'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="bar" style="width: 900px; height: 500px;"></div>
  </body>
</html>



             <!-- /. PAGE INNER  -->
            </div>