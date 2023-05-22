<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    </head>
    <body>
        <header>
            <p class="p">Welcome To Our Restaurant </p>
        </header>
        <?php
         include("dbconnection.php");
         if(isset($_POST['submit']))
         {
             $email = $_POST["email"];
             $password= $_POST['password'];

             $query = "SELECT * FROM user WHERE email = '$email' AND password= '$password'";
             $rseult = $connect->query($query);
             $num = $rseult->num_rows;
             $rows = $rseult->fetch_assoc();
             if($num > 0){
                 $_SESSION['email'] = $rows['email'];
                 $_SESSION['password'] = $rows['password'];
                 $_SESSION['user_id']= $rows['user_id'];
                 $_SESSION['fname'] = $rows['fname'];
                 $_SESSION['lname'] = $rows['lname'];





                 header("location:home.php");

             } else{
                echo "<div class='alert alert-danger'>Error! Invalid Email Or Password</div>";

             }


         }
         /*
         if(isset($_POST['submit'])){
            $email= $_POST['email'];
            $password= $_POST['password'];
            $sql= "SELECT* FROM user WHERE email= '$email' AND password= '$password'";
            $result= mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)==1){
                header("location:home.php");
            }else{
              echo "<div class='alert alert-danger'>Error! Invalid Email Or Password</div>";
            }
           }
           */
        ?>
        <form class="s" method="POST">
            <p class="e">Email</p>
                <input class="email"type="email" name="email" placeholder="Enter your email"checked >
                <p class="p1">Password</p>
                <input class="pass" type="password" name="password"  placeholder="Enter your Password" checked >
                <a class="fp" href="update.php">Forget Password?</a>
                <input class="b" type="submit" name="submit" value="Login">
                <p class="d">Don’t have an account ? </p>
                <a class="reg" href="register.php">Register Now </a>
        </form>
    </body>
</html>