<link rel="stylesheet" href="css/menu.css" />

<?php include('header.php'); ?>
       <!--==================== Show-menu ====================-->
       <div class="img">
        <h4> Our Menu</h4>
         <h6> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis vel quibusdam, eligendi non soluta. </h6>
</div>
<!---================== Menu ==================--->

        <!-- Menu Section Start -->
        <section id="menu">
            <div class="container">
                <div class="title">
                    <h2>Our Special Menu</h2>
                </div>
                <div class="menu-items">
                    <div class="menu-items-left">
                   <?php 
                 $sql = "SELECT * FROM menu WHERE meal_id = 1 OR  meal_id = 2 OR  meal_id = 3 OR  meal_id = 4 OR meal_id = 5 OR meal_id = 6 OR meal_id = 7 OR
                meal_id = 8 OR meal_id = 9 OR  meal_id = 10 OR meal_id = 11 OR meal_id = 12 OR meal_id = 13 OR meal_id = 14 OR  meal_id = 15 OR meal_id = 16 ";
                 $menu = $connect->query($sql);
                 

while ($row = mysqli_fetch_assoc($menu)){
    ?>
                        <div class="menu-item">
                            <img src="<?php echo $row['image'] ?>" alt="LASAL Cheese">
                            <div>
                                <h3><?php echo $row['meal_name'] ?> <span class="primary-text"> <?php echo $row['price'] ?> EL</span></h3>
                                <p><?php echo $row['ingredients'] ?></p>
                            </div>
                        </div>
                        <?php  } ?>

                        </div>                        <!--
                        <div class="menu-item">
                            <img src="images/1b9da72e-9c10-4aa3-a335-0e267db143d2.jpg">
                            <div>
                                <h3>Meat pizza <span class="primary-text">65 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\90676752-fb51-4c5d-a6c2-6ec0c0afa49d.jpg" >
                            <div>
                                <h3>Mexican Taco Pizza <span class="primary-text">75 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\2fe206c6-0994-479b-99f7-8cc81bfa910e.jpg" >
                            <div>
                                <h3>chicken & BBQ pizza <span class="primary-text">57 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\c0fa81b8-cc5e-48c5-856a-d78377352752.jpg" >
                            <div>
                                <h3>pepperoni pizza <span class="primary-text">53 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\fdde2036-0385-4b04-b025-0a8d21e4e337.jpg" >
                            <div>
                                <h3>Grilled fish fillet <span class="primary-text">100 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\91f784b7-4637-4ed2-a07a-7b5ad9f6ab42.jpg" >
                            <div>
                                <h3>Sinjar fish <span class="primary-text">120 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\08f44e31-ec7a-4591-8d46-7fdacada457c.jpg" >
                            <div>
                                <h3>Grilled fish <span class="primary-text"> 90 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\ab833799-40e2-4238-9561-ab313312c75a.jpg" >
                            <div>
                                <h3>Fish fillet <span class="primary-text">97 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\e68cc316-6c45-41be-9e6e-46c6ae719a49.jpg" >
                            <div>
                                <h3>Pasta with cheese <span class="primary-text">80 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\Lasagna bolognese.webp" >
                            <div>
                                <h3>lasagna bolognese <span class="primary-text">90 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\Cacio e pepe (1).webp" >
                            <div>
                                <h3>cacio e pepe <span class="primary-text">150 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\Pasta norma.webp" >
                            <div>
                                <h3>Pasta norma <span class="primary-text">130 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\images.jpg" >
                            <div>
                                <h3>Pasta with red sauce <span class="primary-text">70 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\e68ee9c5-3d6c-4e67-9ccf-f1ea76fffc6d.jpg" >
                            <div>
                                <h3>Meat Casserole <span class="primary-text">450 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                         </div>
                        </div>

                        <div class="menu-item">
                            <img src="images\cef1c3a8-56ee-40f0-bd6e-b5660467501e.jpg" >
                            <div>
                                <h3>Meat With Onions <span class="primary-text">390 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                    </div>
-->

<div class="menu-items-right">
                    <?php
                 $sql = "SELECT * FROM menu WHERE meal_id = 17 OR  meal_id = 18 OR  meal_id = 19 OR  meal_id = 20 OR meal_id = 21 OR meal_id = 22 OR meal_id = 23 OR
                meal_id = 24 OR meal_id = 25 OR  meal_id = 26 OR meal_id = 27 OR meal_id = 28 OR meal_id = 29 OR meal_id = 30 OR meal_id = 31 ";
                 $menu = $connect->query($sql);
                 

while ($row = mysqli_fetch_assoc($menu)){
    ?>
                        <div class="menu-item">
                            <img src="<?php echo $row['image'] ?>" alt="KOFTA MEAT">
                            <div>
                                <h3><?php echo $row['meal_name']  ?>  <span class="primary-text"> <?php echo $row['price'] ?> EL</span></h3>
                                <p><?php echo $row['ingredients'] ?></p>
                            </div>
                        </div>
                        <?php  } ?>
                        <!---
                        <div class="menu-item">
                            <img src="images/b5e6f1ad-6b2d-4a80-af90-bf1359921c89.jpg">
                            <div>
                                <h3>Meat Stuffed <span class="primary-text">350 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\fee88f73-b9a2-44f1-853c-ec80dfb47bcf.jpg" >
                            <div>
                                <h3>Grilled Beef With Sauce <span class="primary-text">430 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\0219256c-acb2-4f3c-b288-407049e34698.jpg" >
                            <div>
                                <h3>cGrilled Chicken <span class="primary-text">120 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\ce255ba4-bb8a-49bc-af17-165ba927fcd7.jpg" >
                            <div>
                                <h3>Chicken Fajitas <span class="primary-text">160 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\a4be0d0d-b8b5-4ea2-a6fb-8284a7ab2ded.jpg" >
                            <div>
                                <h3>Chicken Pane <span class="primary-text">130 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\357b6432-6ab9-44d3-b373-10844a7827ed.jpg" >
                            <div>
                                <h3>Crispy Chicken <span class="primary-text">150 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\f4326012-0cb6-47c0-a8be-f5382c00ebd6.jpg" >
                            <div>
                                <h3>chinese Chicken <span class="primary-text"> 200 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\cacaea01-91f8-4f80-a838-57324ac151fe.jpg" >
                            <div>
                                <h3> Tea <span class="primary-text">20 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\e97bee63-2d98-48e7-afaf-acf72fb87f9d.jpg" >
                            <div>
                                <h3>Green Tea <span class="primary-text">25 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\Frozen-Strawberry-Daiquiri-07sq.webp" >
                            <div>
                                <h3>Strawberry Daiquiri <span class="primary-text">15 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\orange-juice-recipe.jpg" >
                            <div>
                            <h3>Italian Amaretto <span class="primary-text">36 EL</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\c41f4a58-4ad1-461c-96e2-ac61a6df8c84.jpg" >
                            <div>
                                <h3>Coffe <span class="primary-text">35 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\Almond-Milk-Coffee-001.webp" >
                            <div>
                                <h3>Millk Coffe <span class="primary-text">45 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\WhatsApp Image 2023-04-27 at 01.26.56.jpg" >
                            <div>
                                <h3>Mojito <span class="primary-text">21 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="images\sea-breeze-720x720-recipe-e1e39750d0fe46eeb281de64c93110dd.jpg" >
                            <div>
                                <h3>Cedarwood <span class="primary-text">40 EL</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.</p>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
-->
                </div>
               
                
        </section>
    
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