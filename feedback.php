<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Online food ordering site
    Register on the site now to order food online and enjoy the strongest offers and discounts on meals ">
    <meta name="author" content="Akelny">
    <title>Akelny for easy ordering and booking</title>
    
    <!-- icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/italian-cuisine-pasta-organic-food-restaurant-foods-a69b88dccd718d1a8bcdfaab1b306de7 (2).png"/>
    <!--font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--js links-->
    <script type="text/javascript" src="js/script.js"></script>
    <!--==================== CSS-FOOTER ====================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css\feedback.css." />

</head>

<body>
    <header>
        <div class="navbar">
          <div class="brand"><h2>Akelny</h2></div>
         
          <div class="links">
            <ul>
               <li>  <a href="home.php">Home</a></li>
               <li>  <a href="profile.php" >Profile</a></li>
               <li>  <a href="about&contact.php" >Contact&About</a></li>
               <li>  <a href="menu.php" >menu</a></li>
               <li>  <a href="feedback.php" >feedback</a></li>
               <li>  <a href="reservation.php"  >Reservation&onlineOrdering</a></li>
               <?php 
               include('dbconnection.php');
               if(isset($_SESSION['user_id'] ))  : ?>
        <a href="logout.php"> <button class="lo"> LOGOUT</button></a>
                <?php endif; ?>
   <style>
  .lo{
    width:80px;
    height:40px;
  color: #ffffff;
  background-color: rgb(202, 53, 53);
}
.lo:hover{
   color: #ffffff;
   background-color:rgb(0, 0, 0) ;
}
.ad{
     height:40px;
     background-color: rgb(144, 3, 3);
     margin-left: -240px;
     border-radius: 10px;
    }
  .ad:hover{
     color: #ffffff;
     background-color:rgb(0, 0, 0) ;
   }

</style>

                <?php if(!isset($_SESSION['user_id'])) : ?>
                <li class="r">  <a href="register.php" style="color: aliceblue;">Register</a></li>
                <li class="l">  <a href="login.php"  style="color: aliceblue;">Login</a></li>
                <li class="ad">  <a href="admin/login.php" style = "color: white;" >Admin</a></li>


                <?php endif; ?>
               
              </ul>
          </div> 
          <div class="clearfix"></div> 
       </div>
      </header> 
        <!--==================== HOME-intro ====================-->
        <div class="nator">
            <div class="intro home-intro">
                <h1 class="main-title">FeedBack</h1>
            </div>
        </div>
    <main>
        
        <!--====================FEEDBACK====================-->
        <div class="our-dishes feedback">
            <div class="container">
                <div class="row">
                    <div class="se-meals">
                        <div class="line-sepp"></div>
                        
                        <p class="se">GIVE US YOUR FEEDBACK</p>
                    </div>
                </div>
                <?php
              if (isset($_POST["submit"])) 
              {
                  $user_id=$_SESSION['user_id'];
                  $msg = $_POST['msg'];
                  $email = $_POST['email'];
              
                 $result = $connect->query("INSERT INTO feedback(email, message,user_id) VALUES ('$email', '$msg','$user_id') ");
                 if($result){
                 echo "<div> Your Feedback is Successful</div>";
                    } else{
                     echo "<div> Your Feedback is Fail</div>";
                                    }
                                } ?>

                
                    
                    <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <input id="email" type="text" placeholder="Email" name = "email">
                        </div>
                    </div>
            
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <textarea class="msg" rows="6" cols="60" placeholder="Message*" name = "msg" required></textarea>
                    </div>
                    <input type="submit" name="submit" class="tor" onclick="getInputValue();">
                    </form>
                </div>
                </div>
            </div>
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
</html>
    