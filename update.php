<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="css/update.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    </head>
    <body>
        <header>
            <p class="p">Welcome To Our Restaurant </p>
        </header>
        <?php
          include("dbconnection.php");
          if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['npassword'];
            $repeatPassword=$_POST['password'];
            $sql= "SELECT* FROM user WHERE email= '$email'";
            $result= mysqli_query($connect,$sql);
             if($result){
                    if(mysqli_num_rows($result)>0){
                      if($password===$repeatPassword ){
                        if(strlen(($password))>=8){
                      $update= "UPDATE user SET password = '$password' WHERE email= '$email'";
                      $updateResult = mysqli_query($connect,$update);
                      if($updateResult){
                        header("location:login.php");
                      }else{
                        die("something went wrong");
                      }
                    }else{
                      echo "<div class='alert alert-danger'>Error! Password Must Be At Least 8 Characters Long</div>"; 
                    }
                      }else{
                        echo "<div class='alert alert-danger'>Error! Confirm Password Not Match</div>";
                      }
                    }else{
                      echo "<div class='alert alert-danger'>Error! Check Your Email</div>";
                    }
            }
          }
       ?>
        <form class="s" method="post">
            <p class="e">Email</p>
                <input class="email"type="email" name="email" placeholder="Enter your email"checked >
                <p class="p1">New Password</p>
                <input class="pass" type="password" name="npassword"   placeholder="Enter New Password"  checked>
                <p class="p2">Confirm Password</p>
                <input class="pass2" type="password" name="password"   placeholder="Enter Confirm Password"  checked>
                <input class="b" type="submit" name="submit" value="Reset">
        

        </form>
    </body>
</html>
