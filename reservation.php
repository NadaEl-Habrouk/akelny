
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="css/reservation.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="icon" href="images/italian-cuisine-pasta-organic-food-restaurant-foods-a69b88dccd718d1a8bcdfaab1b306de7 (2).png"/>
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
      color: white;
      border:2px  solid  black;
    }
  .lo:hover{
     color: #ffffff;
     background-color:rgb(0, 0, 0) ;
    }
   .ad{
     height:40px;
     background-color: rgb(144, 3, 3);
     margin-left: -130px;
     border-radius: 10px;
     font-weight: 700;
    }
  .ad:hover{
     color: #ffffff;
     background-color:rgb(0, 0, 0) ;
   }

   .b3:hover{
    color: #ffffff;
    background: rgb(144, 3, 3);
    border-color: #ffffff;
}
</style>
<?php if(!isset($_SESSION['user_id'])) : ?>
    <a href="register.php">  <input class="b1"type="button" value="Register" name="button"></a>
    <a href="login.php">   <input  class="b2" type="button" value="Login" name="button"></a> <br>
    <a href="admin/login.php">   <input  class="ad" type="button" value="Admin" name="button" style = "color: white;"></a>


            <?php endif; ?>

        </header>
            <div class="w">
                <h2 class="res">-Reservation-</h2>
             </div>
             <?php
              if (isset($_POST["submit"])) 
              {
                  $user_id=$_SESSION['user_id'];
                  $user_name= $_POST['user_name'];
                  $appointment = date('Y-m-d', strtotime($_POST["appointment"]));
                  $num_of_table= $_POST['num_of_table'];
                  $num_of_people= $_POST['num_of_people'];
                  $meal_name= $_POST['meal_name'];

                 $result = $connect->query("INSERT INTO reseve(user_name,appointment,num_of_table,num_of_people,meal_name,user_id) VALUES ('$user_name', '$appointment','$num_of_table', $num_of_people, ' $meal_name','$user_id') ");
                 if($result){
                    echo "<script type = \"text/javascript\">
                    alert(\"Done Successfully \");
                    window.location = (\"reservation.php\")
                    </script>";
                   
                    } else{
                    echo "<script type = \"text/javascript\">
                alert(\"Reservation failed\");
                window.location = (\"reservation.php\")
                </script>";
                                    }
                                } ?>
<form action="" method = "POST">
            <div class="v">
                <h2 class="r">Reserve Your Table</h2>
                <input class="n1" type="name" placeholder="Name" name = "user_name">
                <input class="n2" type="name" placeholder="Appointment" name = "appointment">
                <input class="n3" type="number" placeholder="Number Of Tables" name = "num_of_table">
                <input class="n4" type="number" placeholder="Number Of People" name = "num_of_people">
                <input class="n6" type="name" placeholder="Meal’s Name" name = "meal_name">
                <input class="b3" type="submit" name="submit"  value="Reserve" >
            </div>
            </form>
        <!---------------------------------------->
       <?php
         if (isset($_POST["button"])) 
         {
           $user_id=$_SESSION['user_id'];
           $user_name= $_POST['user_name'];
             $phone= $_POST['phone'];
             $address= $_POST['address'];
             $meal_name= $_POST['meal_name'];
             $errors= array();
             if(strlen(($phone))<11){
               array_push($errors, "Error! Phone Must Be 11 Numbers");
             }
             else{
               $sql1 = " INSERT INTO `order`( `user_name`, `address`, `phone`, `meal_name`, `user_id`) VALUES ('$user_name','$address','$phone','$meal_name','$user_id') ";
               $result1= mysqli_query($connect,$sql1);

            if($result1){
                echo "<script type = \"text/javascript\">
                alert(\"Done Successfully \");
                window.location = (\"reservation.php\")
                </script>";
               
               } else{

                echo "<script type = \"text/javascript\">
                alert(\"Reservation failed\");
                window.location = (\"reservation.php\")
                </script>";
                         }   
               }
                           } ?>
       <form action="" method = "POST">
       <div class="o">
           <h2 class="ch">CHOOSE YOUR ORDER </h2>
           <input class="z1" type="name" placeholder="Name" name = "user_name">
           <input class="z2" type="phone" placeholder="Phone" name = "phone">
           <input class="z3" type="address" placeholder="Home Address" name = "address">
           <input class="z4" type="name" placeholder="Meal" name = "meal_name">
           <input class="b4" type="submit"  value="Save" name="button">
       </div>
       </form>


            <section class="footer">
                <h2 class="a">Akelny</h2>
                <p class="u">It is a long established fact that a reader <br>
                    will be distracted by the readable content of a page <br>
                    whenlooking at its layout.The point of using Lorem <br>
                    Ipsum is that it has a more-or-less normal <br>
                    distribution of letters</p>
                      <div class="footer-icon"><i class="fab fa-instagram"></i></div>
                      <div class="footer-icon"><i class="fab fa-google-play"></i></div>
                      <div class="footer-icon"><i class="fab fa-twitter"></i></div>
                      <div class="footer-icon"><i class="fab fa-youtube"></i></div>
                <div class="open">
                    <h2 class="x">Opening Hours</h2>
                    <P class="pr-footer">Monday - Friday----08:00-22:00</P>
                    <P class="pr-footer">Saturday-Sunday-------8:00 - 22:00</P>
                </div>
                    <div class="contact">
                        <h2 class="c">CONTACT US</h2>
                        <div class="all">
                            <a href="#" class="m1">A:2972 Westheimer Rd.Santa Ana,Illinois85486 </a><br>
                            <a href="#" class="m2">E :jackson.graham@example.com<a><br>
                            <a href="#" class="m3">P :+38 056 23 15 7851</a>
                        </div>
                    </div>
                </div>
               </section>
            <script src="Reservation.js"></script>
    </body>
</html>

        
        