<?php
    if(isset($_POST['btnsubmit'])){
        // print_r($_FILES['imageHome']);
        // here it will print an aray: name=imageName,type,temporary name created by php,size(Byte)
        // all uploaded file related info are stored in global variable $_Files[]
        $img_name=$_FILES['imageHome']['name'];
        $tmp_name=$_FILES['imageHome']['tmp_name'];
        // when an image/file is uploaded:1. move file using temporary name
        move_uploaded_file($tmp_name,"upload/".$img_name);        

    }
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Admin</title>

    <link rel="stylesheet" href="Bootstrap5/bootstrap.min.css" type="text/css">
</head>
<body>

    <!-- <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="imageHome" class="form-controls">
            <input type="submit" name="btnsubmit" class="btn btn-primary">
        </form>
        <div>        
            <img src="upload/<?php if(isset($img_name)){echo $img_name;}?>" alt="">
        </div>        
    </div> -->

    <div class="container bg-light">
        <div class="row my-4 py-4">
            <div class="h2 py-2 mx-auto text-center text-primary">
                Sign UP as Admin
            </div>
            
            <form class="col-md-8 mx-auto form-group" action="" method="post"
            enctype="multipart/form-data">
            <!-- if you want to sublmit image in form method="post" is not not enogh
        also include: enctype="multipart/form-data" -->
                <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name" required>
                
                <div class="row justify-content-center">
                    <div class="col-md-12 my-2">
                        <input id="password" class="form-control px-2" type="password" name="password" placeholder="Enter password"  required>
                    </div>
                    <div class="col-md-12 my-2">
                        <input id="rp" type="password" name="repassword" placeholder="Confirm password" class="form-control" required>
                        <div id="r"></div>
                    </div>
                    
                    <div class="col-md-6 my-2">
                        <input class="form-control px-2" type="number" minlength="10" maxlength="11" name="phone" placeholder="Phone no" id="phone" required>
                    </div>        

                    <div class="col-md-6 px-2 my-2">
                        <input class="form-control" type="email"  name="email" placeholder="Enter Email" id="email" required>
                    </div>
                    <div class="col-md-6 px-2 my-2">
                        <input class="form-control" type="text" name="housename" placeholder="House Name" id="housename" >
                    </div>
                    <div class="col-md-6 px-2 my-2">
                        <input class="form-control" type="number" name="houseno" placeholder="House No" id="houseno" required>
                    </div>
                    <div class="col-md-6 px-2 my-2">
                        <input class="form-control" type="text" name="city" placeholder="City Name" id="city" >            
                    </div>                    
                    <div class="col-md-6 px-2 my-2">
                        <input class="form-control" type="number" name="rent" placeholder="Rent BDT" id="rent" required>
                    </div>
                    <div class="col-md-12 px-2 my-2">
                        <textarea class="form-control" name="housedescription" placeholder="House description" id="housedescription" rows="4"></textarea>
                    </div>
                    <div class="col-md-6 px-2 my-2">
                        <label class="" for="image">House's Photo: </label>
                        <input class="form-control" type="file" name="imageHome" id="image" required>
                    </div>
                    <div class="col-md-12 my-2">
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-primary d-block mx-2" id="submit" type="submit"
                            name="btnsubmit" >
                            <input class="btn btn-primary d-block mx-2" type="reset" >
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


    
 
    <script>
        const passwordReInput = document.getElementById('rp');
        const passwordInput=document.getElementById('password');
        
        const submitBtn=document.getElementById("submit");
        submitBtn.disabled = true;

        // check if password matches
        passwordReInput.addEventListener('input', function(event) {
        // Handle the input event here
            let v1=event.target.value;
            let v2=passwordInput.value;
            document.getElementById('r').style.visibility='visible';
            if(v1==v2)
            {                
                document.getElementById('r').innerHTML="";
                submitBtn.disabled = false;
            }
            else{                                
                document.getElementById('r').innerHTML="pass word did not matched !!";
                submitBtn.disabled = true;
            }
                        
        });
    </script>

</body>
</html>