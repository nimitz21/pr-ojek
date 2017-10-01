<?php 
  include 'connectdb.php';
  session_start();
  $_SESSION["user_id"] = 1;
  include 'getlocation.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Edit Preferred Location</title>
   <link rel="stylesheet" type="text/css" href="css/editlocation.css">
 </head>
 <body>

   <div class="locationsplaceholder">
      <p id="preffered-location">
        Edit Preferred Locations
      </p>
      <table class="locationtable" align="center">
        <tr>
          <td>No</td>
          <td>Locations</td>
          <td>Actions</td>
        </tr>
        <?php 
            $i = 1;
          foreach ($locations as $loc) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            $i+=1;
            echo "<td id='location'>" .$loc['location'] . "</td>";
            
          }
        ?>
        
      </table>

      </ul>
  </div>
 
 </body>
 </html>