  <?php
  include 'index.php';
  include_once 'connection.php';

  if(isset($_POST['submit'])) {
    $name = strip_tags($_POST['name']);
    $firstname = strip_tags($_POST['firstname']);
    $sid = strip_tags($_POST['sid']);
    $email = strip_tags($_POST['email']);
    $slot_id = strip_tags($_POST['slot_id']);

    $name = $connection->real_escape_string($name);
    $firstname = $connection->real_escape_string($firstname);
    $sid = $connection->real_escape_string($sid);
    $email = $connection->real_escape_string($email);
    $slot_id = $connection->real_escape_string($slot_id);

    $check_sid = $connection->query("SELECT sid FROM students WHERE SID='$sid'");
    $count=$check_sid->num_rows;

    if ($count==0) {

      $query = "INSERT INTO students(NAME, FIRSTNAME, SID, EMAIL, SLOT_ID) VALUES('$name','$firstname','$sid','$email', '$slot_id')";
      if ($connection->query($query)) {
        $query = "UPDATE slots SET count = count - 1 WHERE SLOT_ID = $slot_id and count > 0";
        if ($connection->query($query)) {
          ?>
          <div class="alert alert-success alert-dismissible text-center" style="margin-left: 8.5%; margin-right: 8.5%; margin-top: 20px;">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Congrats!</strong> We've captured your details.
         </div>
         <?php

       }        
     }
     else {
      ?>
      <div class="alert alert-danger alert-dismissible text-center" style="margin-left: 8.5%; margin-right: 8.5%; margin-top: 20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Sorry!</strong> Error occurred, Please Try again.
      </div>
      <?php
    }
  }else {
    ?>
    <div class="alert alert-info alert-dismissible text-center" style="margin-left: 8.5%; margin-right: 8.5%; margin-top: 20px;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Whoops!</strong> Looks like you have already booked your seat.<a href="#" class="alert-link">Not satisfied? Change your seat</a>.
    </div>
    <?php

  }

}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Practical Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 </head>
<body>
  <div class="container padding">
    <div class="row welcome">
      <div class="col-12 bg-green">
        <h1 class="display-6">COMP207 - Register here for a Practical Slot</h1>
        <hr class="my-4">
      </div>
      <div class="col-12">
        <p class="lead">
          <b>Register only if you know what you are doing.</b>
          <ul>
            <li>Please enter <b>all</b> information and select your desired day. Please enter a correct 'SID' number!</li>
            <li>Please check the number of available seats before submitting.</li>
            <li>Register only to one slot.</li>
            <li>Any problems? Write  to <a href="weberb@csc.liv.ac.ke" >weberb@csc.liv.ac.ke</a> for help.</li>
          </ul>
        </p>
      </div>
    </div>
    <div class="signin-form padding" id="register_form">
      <form class="form-signin" id="contact-form" method="post" action="" role="form">
        <div class="controls">
          <hr class="my-4">
          <div class="row text-center">
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="form-group">
                <label for="form_name">Name</label><br>
                <input id="form_name" type="text" name="name" class="form-control"
                placeholder="Please enter your name" required="required"
                data-error="  Name is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="form-group">
                <label for="form_email">Firstname</label><br>
                <input id="form_name" type="text" name="firstname" class="form-control"
                placeholder="Please enter your Firstname" required="required"
                data-error="Firstname required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="form-group">
                <label>SID</label><br>
                <input id="form_name" type="text" name="sid" class="form-control"
                placeholder="Please enter your SID" required="required"
                data-error="Valid SID is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="form-group">
                <label>Email Address</label><br>
                <input id="form_email" type="email" name="email" class="form-control"
                placeholder="Please confirm your Email" required="required"
                data-error="Valid Email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-6">
              <h3 class="header text-danger" style="text-align: left;">Select the Practical slot</h3>
              <select id="selectbox" data-selected="" class="form-control" name="slot_id" data-error="Slot is required" required="required">
                <div class="help-block with-errors"></div>
                <option value=""  selected="selected" disabled="disabled"><b>NB:</b  > Register only to one slot.
                </option>
                <?php 
                $sql ="SELECT * FROM slots";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()){
                    echo "<option value='". $row['SLOT_ID'] ."'>" . $row['Day']," ",$row['time'], "..................." ,$row['count'], "  Seats  Remaining"."</option>";
                  }
                }
                ?>
                }
              </select>
            </div>
            <div class="btn" style="padding: 30px; text-align:center">
              <input type="submit" class="btn  btn-danger btn-send" onclick="myFunction()" value="Clear All">
              <input type="submit" class="btn btn-success btn-send" id="send" value="Register" name="submit"> 
            </div>
          </div>
        </div>
      </form>
    </div>
    <script>
      function myFunction() {
        document.getElementById("contact-form").reset();
      }
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
        });
      }, 4000);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </body>
  </html>
  <?php $connection->close(); ?>