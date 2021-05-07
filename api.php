<?php

$host = $_GET['host'];
$port = $_GET['port'];

include 'libs/MinecraftQuery.php';


$info = server_info($host, $port);


?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Api minecraft java edition server</title>
    <style>
      .container{
        background-image: url('images/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1><? echo $host; ?></h1>
      <?php
      
      if($info === false){
        echo '<p>Status: Offline</p>';
      }else{
        echo '<p>Status: Online</p>';
        echo '<p>Motd:', $info['motd'], '</p>';
        echo '<p>Players:', $info['players'], '/', $info['max_players'], '</p>';
      }
      
      ?>
    </div>
  </body>
</html>
