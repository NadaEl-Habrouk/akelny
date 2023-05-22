<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Online food ordering site
      Register on the site now to order food online and enjoy the strongest offers and discounts on meals ">
      <meta name="author" content="Akelny">
      <title>Responsive Registration Form</title>
      <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
      <link rel="stylesheet" href="css/register.css" />
      <!-- icon-->
      <link rel="icon" href="images/italian-cuisine-pasta-organic-food-restaurant-foods-a69b88dccd718d1a8bcdfaab1b306de7.png"/>
      <!--font-->
      <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Pacifico&display=swap" rel="stylesheet">

      </head>
  <body>

    <div class="container">
      <h1 class="form-title">Welcome To Our Restaurant</h1>  
      <?php
        include("dbconnection.php");
        if(isset($_POST['create'])){
            $firstname= $_POST['fullname'];
            $lastname= $_POST['username'];
            $email= $_POST['email'];
            $phone= $_POST['phoneNumber'];
            $password= $_POST['password'];
            $pass_repeat= $_POST['confirmPassword'];
            $Gender=$_POST['gender'];
            $errors= array();
            if(empty($firstname) OR empty($lastname) OR empty($email) OR empty($phone) OR empty($password) OR empty($pass_repeat) OR empty($Gender)){
                 array_push($errors,"All fields are required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              array_push($errors, "Error! Invalid Email");
            }
            if(strlen(($password))<8){
              array_push($errors, "Error! Password Must Be At Least 8 Characters Long");
            }
            if(strlen(($phone))<11){
              array_push($errors, "Error! Phone Must Be 11 Numbers");
            }
            if($password!==$pass_repeat){
              array_push($errors,"Error! Confirm Password Not Match");
            }
            if (count($errors)>0){
              foreach($errors as $errors){
                echo  "<div class='alert alert-danger'>$errors</div>";
              }
            
             }else{
                 $sql= "INSERT INTO user(fname, lname, email, password, phone, is_admin, gender) VALUES ('$firstname','$lastname','$email','$password','$phone',false,'$Gender')";
              
                $result= mysqli_query($connect,$sql);
                if($result){
                    header("location:login.php");
                }else{
                  die("something went wrong");
                }
         
            }
          }
        ?>
      <form  method="post">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">First Name</label>
            <input type="text"
                    id="fullName"
                    name="fullname"
                    placeholder="Enter First Name" required/>
          </div>
          <div class="user-input-box">
            <label for="username">Last Name</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Enter Last Name" required/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email" required/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number" required/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password" required/>
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password" required/>
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" value="male" id="male" required>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" required>
            <label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other" required>
            <label for="other">Other</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Create Account" name="create">
        </div>
      
        <div class="footer">
          <p>
            Already have an account?
            <a href="login.php">Login Now</a>
          </p>   
        </div>
      </form>
    </div>
  </body>
</html>