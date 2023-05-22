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
      <h1 class="form-title">Add Menu</h1>  
      <?php
        include("../dbconnection.php");
        if(isset($_POST['update_btn']))
        {
            $id = $_POST['update_id'];
            
            $query = "SELECT * FROM menu WHERE meal_id='$id' ";
            $query_run = mysqli_query($connect, $query);

            foreach($query_run as $row)
            {
            



      ?>
          
      <form  method="post">
        <div class="main-user-info">
          <div class="user-input-box">
          <input type="hidden" name = "update_id" value = "<?php echo $row['meal_id']?>" >
            <label>Meal Images</label>
            <input type="text"
                    name="image"
                    value =" <?php echo $row['image'] ?>"   />
          </div>
          <div class="user-input-box">
            <label >Meal Name</label>
            <input type="text" 
             name="meal_name" value =" <?php echo $row['meal_name'] ?>"/>
          </div>
          <div class="user-input-box">
            <label >Price</label>
            <input type="text"
                    name="price" value =" <?php echo $row['price'] ?>"/>
          </div>
          <div class="user-input-box">
            <label >Ingredients</label>
            <input type="text"
             name="ingredients" value =" <?php echo $row['ingredients'] ?>" />
          </div>
         
        </div>
       
        <div class="form-submit-btn">
          <input type="submit" value="Update Menu" name="update">
        </div>
      
      
      </form>
      <?php
                }
            }
           
?>  
 <?php 
if (isset($_POST['update'])) {
    $id = $_POST['update_id'];
    $image = $_POST['image'];
    $meal_name = $_POST['meal_name'];
    $price = $_POST['price'];
    $ingredients = $_POST['ingredients'];

    $query = "UPDATE menu SET image = '$image', meal_name = '$meal_name' , price = '$price', ingredients = '$ingredients' WHERE meal_id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo "<script type = \"text/javascript\">
      alert(\"menu Updated Successfully \");
      window.location = (\"view_menu.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update menu. Try Again\");
      window.location = (\"view_menu.php\")
      </script>";
    }
}
?>

    </div>
  </body>
</html>