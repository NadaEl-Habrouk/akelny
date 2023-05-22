<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About&Contant</title>
    
        <!--==================== Bootstrap ====================-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
       
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="css/about&contact.css" />

    </head>
    <body>
        <header>
            <p class="logo">Akelny</p>
            <nav class="n">
                <a href="home.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="about&contact.php">About&Contact</a>
                <a href="menu.php">Menue</a>
                <a href="feedback.php">Feedback</a>
                <a  href="reservation.php">Reservation&Online Ordering</a>
            </nav>
            <?php 
             include('dbconnection.php');
               if(isset($_SESSION['user_id'] ))  : ?>
        <a href="logout.php"> <button class="lo"> LOGOUT</button></a>
                <?php endif; ?>
   <style>
  .lo{
      width:80px;
      height:40px;
      background-color: rgb(202, 53, 53);
      margin-right: -20px;
      font-size: 15px;
      color:white;

    }
  .lo:hover{
     color:white;
     background-color:rgb(0, 0, 0) ;
    }
   .ad{
     height:40px;
     background-color: rgb(144, 3, 3);
     margin-left: -75px;
     border-radius: 10px;
     font-weight: 700;
     font-size: 15px;
    }
  .ad:hover{
     background-color:rgb(0, 0, 0) ;
   }
</style>
<?php if(!isset($_SESSION['user_id'])) : ?>
    <a href="register.php">  <input class="b1"type="button" value="Register" name="button"></a>
    <a href="login.php">   <input  class="b2" type="button" value="Login" name="button"></a> <br>
    <a href="admin/login.php">   <input  class="ad" type="button" value="Admin" name="button" style = "color: white;"></a>


            <?php endif; ?>

        </header>
<!--==================== HOME-intro ====================-->
        <div class="nator">
            <div class="intro home-intro">
                <h2 class="main-title">About Us</h2>
                <p class="pr">Duis auto irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur</p>
            </div>
        </div>
    </header>
    <main>

        <!--==================== Recognition ====================-->
        <body>

      <section class="Recognition sect">
        <div class="row">
          <div class="Recognition-left-col">
            <h1 class="">20 Years of Recognition</h1>
            <h3>
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur.
            </h3>
            <br />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <br />
            <p>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id
                  est laborum.
            </p>
            <br />
          </div>
          <div class="Recognition-right-col">
            <div class="small-img">
              <img src="images/90647f05-47b6-4689-bbe7-85a0e2243735.jpg" alt="" />
              <img src="images/2dd720c3-ac93-4c7a-bcec-6c27404d2d02.jpg" alt="" class="small-img2"/>
            </div>
            <div class="tall-img">
              <img src="." alt="" />
            </div>
          </div>
        </div>
      </section>

      <!--==================== CUSTOMES ====================-->
      <section class="customes sect">
        <div class="customes-col">
          <h2>Our customers are</h2>
          <h1>ALWAYS HAPPY</h1>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
        </div>
      </section>
<!--==================== End Navebare====================-->
<main>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Contact Us</h1><br>
                <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br>
            </div>
        </div>
    </div>
    
    <?Php

         if(isset($_POST['submit'])){
          $user_id=$_SESSION['user_id'];
          $name=$_POST['name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $message=$_POST['message'];
          $errors= array();
            if(empty($name) OR empty($email) OR empty($message) ){
                 array_push($errors,"All fields are required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              array_push($errors, "Error! Invalid Email");
            }
            if(strlen(($phone))<11){
              array_push($errors, "Error! Phone Must Be 11 Numbers");
            }
            if(strlen(($message))<10){
              array_push($errors, "Error! Message Must Be more than or equal 10 letters");
            }
            if (count($errors)>0){
              foreach($errors as $errors){
                echo  "<div class='alert alert-danger'>$errors</div>";
              }
            
             }else{
                 $sql= "INSERT INTO contact(user_name , email, phone, message,user_id) VALUES ('$name','$email','$phone','$message','$user_id')";
              
                $result= mysqli_query($connect,$sql);
                if($result){
                  echo  "<div class='alert alert-sucess'>Your Problem has been registered successfully</div>";
                }
               else{
                echo "error";
               }
            }
          }
    ?>


    <div class="row">
        <form name="myForm" method="post">
        <div class="row">
            <div class="men">
                <input id="fname" name="name" type="text" placeholder=" Name" required>
            </div>
           
        
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <input id="email" name="email" type="text" placeholder="Email">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <input id="sub" type="number" name="phone" placeholder="Phone">
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <textarea class="msg" rows="6" cols="60" name="message" placeholder="Message*" required></textarea>
        </div>
        <input type="submit" class="nor" name="submit" onclick="getInputValue();">
    </div>
    </div>
</main>

<!--==================== JS ====================-->
<script src="JS/script.js"></script>
</body>
</html>