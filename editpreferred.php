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
   <link rel="stylesheet" type="text/css" href="css/editpreferred.css">
 </head>
 <body>

   <div class="locationsplaceholder">
      <p id="preffered-location">
        Edit Preferred Locations
      </p>
      <table class="locationtable" align="center">

        <tr>
          <th>No</th>
          <th>Locations</th>
          <th>Actions</th>
        </tr>

        <?php 
            $i = 1;
          foreach ($locations as $loc) {
            echo "<tr>";
            echo "<td id='number'>" . $i . "</td>";
            echo "<td>
                    <form id='form".$i ."' action='editlocation.php' method='POST'>
                      <p id='location".$i."'>".$loc['location'] ."</p>
                      <input type='hidden' name='oldlocation' value='".$loc['location']. "'>
                    </form>
                  </td>";
            echo "<td> 
                    <img id='editpic".$i."' src='storage/images/editpic.png' alt='Edit' onclick='editLocation();'>
                    <img id='deletepic' src='storage/images/delete.png' alt='Edit'>  
                  </td>";

            $i+=1;
            
          }
        ?>
        
      </table>

      </ul>

  </div>

  <div class="newlocation">
    <p id="addnewlocation">
      Add New Location
    </p>

    <form action="/wbd/TugasBesar1_2017/addnewlocation.php" method="POST">
      <input type="text" name="newlocation" id="newlocation" required>
      <button type="submit" id="addlocation">Add</button>
    </form>


    <a href="/wbd/TugasBesar1_2017/profile.php">
      <button type="submit" id="back">
        Back
      </button>
    </a> 
  </div>


 </body>
 </html>

<script type="text/javascript">

  function submitform() {
    let id= event.srcElement.id;
    id = id.slice(-1);

    let form = document.getElementById('form'+id);
    form.submit();
  }


  function editLocation () {
    let id= event.srcElement.id;
    id = id.slice(-1);


    let image = document.getElementById(event.srcElement.id);


    if(image != null && image.src == "http://localhost/wbd/TugasBesar1_2017/storage/images/editpic.png") {    
      image.id = "tickpic"+id;
      image.src = "storage/images/tick.jpg";

      let td = document.getElementById('location'  + id);
      let inner = td.innerHTML;

      let input = document.createElement('input');
      input.type = "text";
      input.value = inner;
      input.name = "location";
      input.className = "textbox";

      td.parentNode.replaceChild(input, td);
    } else {
      submitform();
    } 


  }


</script>