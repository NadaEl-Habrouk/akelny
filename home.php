<!--==================== CSS ====================-->
<link rel="stylesheet" href="css/home.css" />


<?php include('header.php'); ?>
      <div class="img">
        <h4> Welcome To Our Restaurant</h4>
             <h1> HIGHT QUALITY MEALS </h1>
         <h6> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis vel quibusdam, eligendi non soluta </h6>
         <a href="reservation.php"><button class="btn book-btn">Book a table</button></a>
        </div>
     

    <!--about us-->
 <div class="cont">
                <div class="row">
                    <div class="about-us">

                    <div class="img-1"></div> 
                    
                    <div class="about-intro ">
                        <h2 class="main-title">About Us</h2>
                        <p class="pr">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        
                    </div>

                    <div class="img-2"></div>
                    </div>
                    
                </div>
                <a href="../about&contact/index.html"><button class="btn about-btn">About Us</button></a>
            </div>


         <!-- menu start -->
         <section class="menu">
            <h1 class="title">
                our menu
            </h1>
            <p class="pa">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. the point of using lorem ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'content here, content here.
            </p>
            <div class="parent-menu">
          <?php 
                 $sql = "SELECT image,meal_name FROM menu WHERE meal_id = 36 OR  meal_id = 37 OR  meal_id = 38 OR  meal_id = 39 OR meal_id = 40 OR meal_id = 41";
                 $menu = $connect->query($sql);
                 

while ($row = mysqli_fetch_assoc($menu)){
    ?>

                <div class="menu-food-item" >
                    <img src="<?php echo $row['image']; ?>" >
                    <div>
                        <p class="add"  style="color: black;"><?php echo $row['meal_name'];?></p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    
                    </div>
                </div>
                <?php  } ?>
<!--
                <div   class="menu-food-item" >
                    <img src="images/IMG-20230419-WA0022.jpg" alt="" >
                    <div>
                        <p class="add" style="color: black;"  >FISH</p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    </div>
                </div>
                <div class="menu-food-item" >
                    <img src="images/605f182c-5215-41bc-989e-ae5183a0c607.jpg" alt="" srcset="">
                    <div>
                        <p class="add" style="color: black;" >PASTA</p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    </div>
                </div>
                <div class="menu-food-item" >
                    <img src="images/IMG-20230419-WA0020.jpg" alt="" srcset="">
                    <div>
                        <p class="add" style="color: black;" >MEATS</p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    </div>
                </div>
                <div class="menu-food-item" >
                    <img src="images/IMG-20230419-WA0031.jpg" alt="" >
                    <div>
                        <p class="add" style="color: black;" >CHICKEN MEALS</p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    </div>
                </div>
                <div class="menu-food-item"  >
                    <img src="images/WhatsApp Image 2023-04-27 at 01.26.56.jpg" alt="" srcset="">
                    <div>
                        <p class="add"  style="color: black;" >DRINKS</p>
                        <a href="menu.php"><button class="button">view more</button></a>
                    </div>
                </div>
                <div> 
                     <a href="menu.php"><button class="mm">MORE MENU</button></a>
                </div>
            </div>
            --->
        </section>
        <!-- menu end -->


<!--why-->

<section class="services">
    <div class="contain">
        <div class="dishes">
            <h2 class="main-title">Why To Choose Us?</h2>
            <p class="pr-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. the point of using lorem ipsum is that it has a more-or-less normal distribution of letters, as opposed to using'content here.</p>
        </div>
    </div>
    <div class="content">
            <div class="box">
                <div class="inner">
                    <span class="material-icons">
                        wifi
                      </span>
                     <h3>Free Wifi</h3>
                     <p>It is a long established fact that a reader will be distracted .</p>
                </div>
            </div>

            <div class="box">
                <div class="inner">
                    <div class="icon"> <i class="fa-solid fa-star"></i></i></div>
                     <h3>Highly Rated</h3>
                     <p>It is a long established fact that a reader will be distracted .</p>
                </div>
           </div>
           <div class="box">
            <div class="inner">
                <div class="icon"><i class="fa fa-mobile"></i></div>
                 <h3>Friendly Staff</h3>
                 <p>It is a long established fact that a reader will be distracted .</p>
            </div>
       </div>

        <div class="box">
				<div class="inner">
					<div class="icon"><i class="fa-solid fa-clock"></i></i></div>
					 <h3>Fast Delivery</h3>
					 <p>It is a long established fact that a reader will be distracted .</p>
				</div>
		   </div>

    </div>
</div>
</section>
<!--clint saying-->
<div class="clint">
    <div class="ttl">
        <h2>Clint Saying</h2>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more- or-less normal distribution of letters, as opposed to using 'Content here</p>
    </div>
    <div class="bdy">
       <div class="comma">
        <i class="fa-solid fa-quote-left"></i>
        
       </div>
       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here</p>
       <img src="images/f5aeaee7-d3ee-44b8-8064-1b117fd805a7.jpg"/>
       <h3>Mark</h3>
       <div class="span">
        <span class="material-icons">
            star
        </span>
        <span class="material-icons">
            star
        </span>
        <span class="material-icons">
            star
        </span>
        <span class="material-icons">
            star_half
        <span class="material-icons">
            star_outline
        </span>
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
</body>
</html>