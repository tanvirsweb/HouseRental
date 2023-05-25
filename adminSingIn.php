<?php
    if(isset($_POST['btnEmail'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
    if(isset($_POST['btnPhone'])){
        $phone=$_POST['phone'];
        $password=$_POST['password'];
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Admin</title>

    <link rel="stylesheet" href="Bootstrap5/bootstrap.min.css" type="text/css">
</head>
<body>
    <?php
        if( isset($_POST['phone']) ){
            echo"<div class='container'>Phone: $phone<br>Password: $password</div>";
        }
        if( isset($_POST['email']) ){
            echo"<div class='container'>Email: $email<br>Password: $password</div>";
        }
    ?>
    <div class="container bg-light">
        <div class="row my-4 py-4">
            <div class="h2 py-2 mx-auto text-center text-primary">
                SignIn as Admin
            </div>
            
            <form class="col-md-8 mx-auto" action="" id="emailSignIn" method="post">
                <!-- <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name" required> -->
                <input class="form-control my-2" type="email"  name="email" placeholder="Enter email address" id="email" required>        
                <input class="form-control my-2" type="password" name="password" placeholder="Enter password" id="password" required>                                            
                <input class="btn btn-primary my-2 d-block mx-auto" name="btnEmail" type="submit" >  
                <a class="btn nav-link text-center" onclick="funcPhoneSignIn()">signIn with phone no</a>                                   

            </form>

            <form class="col-md-8 mx-auto d-none" action="" id="phoneSignIn" method="post">
                <!-- <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name" required> -->
                <input class="form-control my-2" type="number"  name="number" placeholder="Enter phone number" id="email" required>        
                <input class="form-control my-2" type="password" name="password" placeholder="Enter password" id="password" required>                                            
                <input class="btn btn-primary my-2 d-block mx-auto" name="btnPhone" type="submit" >  
                <a class="btn nav-link text-center" onclick="funcEmailSignIn()">signIn with email</a>                                   

            </form>
        </div>
    </div>

    <script>
        function funcEmailSignIn(){
            document.getElementById("emailSignIn").className='col-md-8 mx-auto';
            document.getElementById("phoneSignIn").className='d-none';
        }
        function funcPhoneSignIn(){
            document.getElementById("phoneSignIn").className='col-md-8 mx-auto';
            document.getElementById("emailSignIn").className='d-none';
        }
    </script>
</body>
</html>