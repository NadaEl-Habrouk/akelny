<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Online food ordering site
      Register on the site now to order food online and enjoy the strongest offers and discounts on meals ">
      <meta name="author" content="Akelny">
      <title>Add Admin</title>
      <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/register.css" />
      <!-- icon-->
      <link rel="icon" href="images/italian-cuisine-pasta-organic-food-restaurant-foods-a69b88dccd718d1a8bcdfaab1b306de7.png"/>
      <!--font-->
      <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Pacifico&display=swap" rel="stylesheet">

      </head>
  <body>

    <div class="container">
      <h1 class="form-title">Add Admin</h1>  
      <?php
        include("../dbconnection.php");

        if(isset($_POST['update_btn']))
        {
            $id = $_POST['update_id'];
            
            $query = "SELECT * FROM user WHERE user_id='$id' ";
            $query_run = mysqli_query($connect, $query);

            foreach($query_run as $row)
            {
            



      ?>
      <form  method="post">
        <div class="main-user-info">
          <div class="user-input-box">
          <input type="hidden" name = "update_id" value = "<?php echo $row['user_id']?>" >
            <label for="fullName">First Name</label>
            <input type="text"
                    id="fullName"
                    name="fname"
                 value =" <?php echo $row['fname'] ?>"/>
          </div>
          <div class="user-input-box">
            <label for="username">Last Name</label>
            <input type="text"
                    id="username"
                    name="lname"
                value =" <?php echo $row['lname']?>"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    value =" <?php echo $row['email'] ?>"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phone"
                    value =" <?php echo $row['phone'] ?>"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="text"
                    id="password"
                    name="password"
                    value =" <?php echo $row['password'] ?>"/>
          </div>
    
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Update Admin" name="update">
        </div>
       
      
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
    $password = $_POST['password'];

    $query = "UPDATE user SET fname='$fname',lname = '$lname' , email='$email', phone = '$phone', password='$password' WHERE user_id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo "<script type = \"text/javascript\">
      alert(\"Admin Updated Successfully \");
      window.location = (\"view_admin.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update Admin. Try Again\");
      window.location = (\"view_admin.php\")
      </script>";
    }
}
?>
    </div>
  </body>
</html>