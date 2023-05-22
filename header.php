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
