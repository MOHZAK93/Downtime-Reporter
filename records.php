<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Mohammed" content="anglogoldashanti.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
     <!--<link href="css/styles.css?v=<?= filemtime('css/styles.css') ?>" rel="stylesheet">-->
    <link rel="stylesheet" href="css/styles.css?<?php echo filemtime('css/styles.css') ?>"/>
    <style>
    
        th {
            background-color:#ccc;
        }
        
        td {
          padding: 6px;
          border: 1px solid #bbb;
          text-align: center;
        }
        
        table tr:hover {background-color: #dddeee;}
        
        tr:nth-child(even) {
          background-color: #ffe;
        }
        tr:nth-child(odd) {
          background-color: #dddeee;
        }
        .buts{
        padding:2px;
        color: #000;
        font-size: 24px;
        background-color:#ccc;
        width:100%;
        margin:10px 0px;
        border:none;   
        }
        button {
            padding:12px;
            color: gold;
            background-color: #800000;
            width:100%;
            border-radius: 5px;
        }
        button:hover {
            color: brown;
            background-color: #dddeee;
        }
    </style>
</head>
<body style="background-image: url('./images/white.jpg');">
  <div class="container-fluid">
       <header>
           <div class="col-md-1">
               <button onClick="history.go(0);">refresh</button>
           </div>
        <div class="col-md-10">
        <h1 class="hed">DAILY DOWNTIME LOG</h1>
        </div>
        <div class="col-md-1">
               <button id='leave'>exit</button>
           </div>
       </header>
       <?php
 include "connect.php";
$sql = "SELECT * FROM records WHERE reg_date >= CURDATE()";
$result = $link->query($sql);
if (!empty($result) && $result->num_rows > 0) {
echo "<table id='table' class='first'><tr><th>equipment</th><th>downtime</th><th>failure mode</th><th>category</th><th>shift</th><th>duration</th><th>remarks</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["equipment"]. "</td><td>" . $row["downtime"]. "</td><td> " . $row["failure"]."</td><td>".$row["category"]."</td><td>".$row["shift"]."</td><td>".$row["duration"]."</td><td>".$row["remarks"]. "</td></tr>";
    }
    echo "</table>";
}
mysqli_close($link);

?>
       <div class="col-md-12">
               <button class="buts" id='chat'>click to display charts</button>
           </div>
           
   <div id="chats">
   <div id="myCanvas">
    <div class="col-md-4">
     <canvas id="barChart"></canvas>
    </div>
    <div class="col-md-4">    
     <canvas id="pieChart"></canvas>
    </div>
    <div class="col-md-4">
     <canvas id="lineChart"></canvas>
    </div>
     </div>
  </div>
  </div>
           <script>document.write('<script src="./assets/js/scripts.js?dev=' + Math.floor(Math.random() * 100) + '"\><\/script>');</script>
</body>
</html>


 