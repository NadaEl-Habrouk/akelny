
      <link rel="stylesheet" href="css/profile.css" />
     <?php include('header.php'); ?>
     <body>
      <div class="img">
        <h2> -profile- </h2>
      </div>
      <br> <br> 
      <?php

      if(isset($_SESSION['email']))
      {
          $email = $_SESSION['email'];
          $query = "SELECT * FROM user WHERE email='$email' ";
          $query_run = mysqli_query($connect, $query);

          foreach($query_run as $row)
          {
              ?>
      <form  method="POST">
      <input type="hidden" name = "update_id" value = "<?php echo $row['user_id']?>" >
        <div>
            <label > First Name </label>
            <input type="text" name="fname" value =" <?php echo $row ['fname'] ?>">
        </div>
        <br>
        <div>
            <label > Last Name </label>
            <input type="text" name="lname"value =" <?php echo $row['lname'] ?>" >
        </div>
        <br>
        <div>
            <label> Email </label>
            <input type="email" name="email"value =" <?php echo $row['email']?>" >
        </div>
        <br>
        <div>
            <label > Phone</label>
            <input type="text" name="phone" value =" <?php echo $row ['phone'] ?>">
        </div>
        <br>
        <div>
            <label> Password </label>
            <input type="text" name="pass" value =" <?php echo  $row['password'] ?>">
        </div>
        <br>
        <div>
            <input  class="update" type="submit" name= "update" value = "Update" >
        </div>
        <br>
</form>

<?php
          }
        }
          ?>
       <?php 
if (isset($_POST['update'])) {
    $id = $_POST['update_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $query = "UPDATE user SET fname='$fname',lname = '$lname' , email='$email', phone = '$phone', password='$pass' WHERE user_id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo "<script type = \"text/javascript\">
      alert(\"Information Updated Successfully \");
      window.location = (\"profile.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update Information. Try Again\");
      window.location = (\"profile.php\")
      </script>";
    }
}
?>
</div>
      <!--==================== FOOTER ====================-->
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Akelny</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="footer-col">
                    <h4 style="margin-left: 150px;" >Opening Hours</h4>
                    <P style="margin-left: 150px;" class="pr-footer">Monday - Friday----08:00-22:00</P>
                    <P  style="margin-left: 150px;" class="pr-footer">Saturday-Sunday-------8:00 - 22:00</P>
                </div>
                <div class="footer-coll">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li><a href="#">A :2972 Westheimer Rd. Santa Ana, Illinois85486  </a></li>
                        <li><a href="#" class="link-hover">E :jackson.graham@example.com<a></li>
                        <li> <a href="#" class="link-hover">P :+38 056 23 15 7851</a></li>
                    </ul>
                </div>
            </div>
        </div>
   </footer>
<!--==================== JS ====================-->
<script src="JS/script.js"></script>
</body>
</html>
