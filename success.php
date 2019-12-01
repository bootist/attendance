<?php 
$title = 'success';
require_once 'include/header.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    //Call function to insert and track if success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email,$contact,$specialty);
    
    if ($isSuccess){
        include 'include/successmessage.php';

    }
    else{
        include 'include/errormessage.php';
    }

}
?>

    <!-- This prints out values that were passed to the action page using method="get" -->
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php //echo $_GET['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php //echo $_GET['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php //echo $_GET['phone'];  ?>
            </p>
    
        </div>
    </div> -->

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div>
    
<?php

   // echo $_GET['firstname'];
  //  echo $_GET['lastname'];
   //echo $_GET['dob'];
  //  echo $_GET['specialty'];
  //  echo $_GET['email'];
  //  echo $_GET['phone'];

?>

<br>
<br>
<br>
<br>
<?php require_once 'include/footer.php';?>   