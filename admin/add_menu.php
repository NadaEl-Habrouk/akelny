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
        if(isset($_POST['create'])){
            $image= $_POST['image'];
            $meal_name= $_POST['meal_name'];
            $price= $_POST['price'];
            $ingredients= $_POST['ingredients'];
           
                $sql= "INSERT INTO menu(image,meal_name,price,ingredients) VALUES ('$image','$meal_name','$price','$ingredients')";
              
                $result= mysqli_query($connect,$sql);
                if($result){
                    header("location:view_menu.php");
                }else{
                  die("something went wrong");
                }
         
            }
          
        ?>
      <form  method="post">
        <div class="main-user-info">
          <div class="user-input-box">
            <label>Meal Images</label>
            <input type="text"
                    name="image"/>
          </div>
          <div class="user-input-box">
            <label >Meal Name</label>
            <input type="text" 
             name="meal_name"/>
          </div>
          <div class="user-input-box">
            <label >Price</label>
            <input type="number"
                    name="price"/>
          </div>
          <div class="user-input-box">
            <label >Ingredients</label>
            <input type="text"
             name="ingredients" />
          </div>
         
        </div>
       
        <div class="form-submit-btn">
          <input type="submit" value="Add Menu" name="create">
        </div>
      
      
      </form>
    </div>
  </body>
</html>