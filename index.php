<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div align="center"><image src="images/arriba.jpg" width="1500" height="300" ></div>

  <h1 style="text-align:center;"></h1>
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><image src=<?php echo $row['imagen_servicio']?>> </td>
      <td><?php echo $row['nombre_servicio']?></td>
      <td><?php echo $row['descripcion_servicio']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 <div align="center"><image src="images/abajo.jpg" width="1500" height="300" ></div>
 </body>
 </html>

