<?php 
      include 'connection.php';
      
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
  
  
        $query = "SELECT * from adminpass1 where email = '$email' and password='$pass' "; 

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)==1)
        {
         
            header("Location: admindashboard.php");  
             
        }
        else
        {
            ?>
            <script>
                alert("Ohh No!!!!  Please Enter Valid Email and Password");
            </script>
            <?php
        }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 firstDiv">
                <img src="images/bodyBuilder2.png" width="100%" alt="">
            </div>
            <div class="col-md-2 "></div>

            <!-- ----------login-mechnism-- -->
            <div class="col-md-6 loginPage text-center">

                <div class="loginP">
                    <img src="images/loginLogo.gif" width="45%">
                    <h1>Login</h1>

                    <form method="POST" action="loginPage.php" style="width:400px; margin: auto;">

                        <div class="form-group row">
                            
                            <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                                <input type="text" class="form-control bg-light" id="emailid" name="email" placeholder="Enter Email">

                            </div>
                        </div>

                        <div class="form-group row" >
                            
                            <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                                <input type="password" class="form-control bg-light" id="emailid" name="password" placeholder="Enter Password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-md-5 col-md-7" style="margin: auto; margin-top: 20px;">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>


                    </form>

                </div>



            </div>


</body>

</html>