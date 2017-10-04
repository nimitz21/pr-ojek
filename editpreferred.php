<?php 
  include 'connectdb.php';

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
                    <form id='confirmdelete".$i."' action='deletelocation.php' method='POST'>
                      <img id='deletepic".$i."' src='storage/images/delete.png' onclick='confirmdelete();'>
                      <input type='hidden' id='delete".$i."' name='location' value='".$loc['location']. "'>
                    </form>
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

    <form name="addnewlocation" action="/wbd/addnewlocation.php" method="POST" onsubmit="return validateForm()">
      <input type="text" name="newlocation" id="newlocation">
      <button type="submit" id="addlocation">Add</button>
      <br>
      <label for="nolocation" id="nolocation"></label>
    </form>

    <a href="/wbd/profile.php">
      <button type="submit" id="back">
        Back
      </button>
    </a> 
  </div>


 </body>
 </html>

 
<script type="text/javascript" src="js/appendqs.js"></script>

<script type="text/javascript">

  function validateForm() {
    let form = document.forms['addnewlocation']['newlocation'].value;
    if(form == "") {
      let label = document.getElementById('nolocation');
      label.innerHTML = "Please input new location.";
      return false;
    }
  }

  function confirmdelete() {

    let id= event.srcElement.id;
    id = id.slice(-1);
    let item = document.getElementById('delete' +id).value;
    let decision = confirm("Are you sure want to delete " + item + "?" );
    if(decision) {
      let form = document.getElementById('confirmdelete'+id);
      form.submit();
    }
  }

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


    if(image != null && image.src == "http://localhost/wbd/storage/images/editpic.png") {    
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

