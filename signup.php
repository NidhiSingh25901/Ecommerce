<?php
$title="SignUp"; 
require_once 'include/session.php';
require_once 'include/signupstyle.php';
require_once 'database/connection.php';


if(isset($_POST['submit1'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $usermobile = mysqli_real_escape_string($con,$_POST['usermobile']);
    $useremail = mysqli_real_escape_string($con,$_POST['useremail']);
    $useraddress1 = mysqli_real_escape_string($con,$_POST['useraddress1']);
    $useraddress2 = mysqli_real_escape_string($con,$_POST['useraddress2']);
    $userpassword = mysqli_real_escape_string($con,$_POST['userpassword']);
    $usercpassword = mysqli_real_escape_string($con,$_POST['usercpassword']);
    $pass = password_hash($userpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($usercpassword, PASSWORD_BCRYPT);

    
    $emailquery = "SELECT * FROM signup WHERE useremail = '$useremail'";

    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
   
   

    if($emailcount>0){   
        ?>
        <script>
        alert("E-mail Id Already exists...Please try with another email id..");
        </script>
        <?php
    }else{
     if($userpassword == $usercpassword){ 

$insertquery = "INSERT INTO signup(username, usermobile, useremail, useraddress1, useraddress2, userpassword, usercpasword)
 VALUES('$username','$usermobile','$useremail','$useraddress1','$useraddress2','$pass','$cpass')";
  $iquery = mysqli_query($con,$insertquery);
    if($iquery){
        ?>
        <script>
        alert("Your account has been created successfully");
        </script>
        <?php
        header("Location: login.php");

         }else{ 
             ?>
             <script>
             alert("Oops!!!! Something went wrong....please try again after sometime");
             </script>
             <?php
         }


     } else {
        ?>
        <script>
        alert("Your password didn't match!!! Please enter your password carefully");
        </script>
        <?php
     }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Biakins Milatino</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="style/signupstyle.css"> -->

    <script src="https://www.google.com/recaptcha/api.is" async dafer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body> 
    <div class="container-fluid login">
        <div class="card loginbg">
            <div class="card-body mx-auto">
                <h4 class="card-title mt-3 text-center heading">Create an Account</h4>
                <a href="#" class="btn btn-block btn-danger"><i class="fa fa-google"></i>We are delighted with your presence</a>
                <p class="divider mt-3 text-center">
                    <span class="text-center">OR</span>
                </p>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input type="text" name="username" class="form-control ml-8" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="username" autocomplete="off" required/>

                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <input type="text" name="usermobile" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="mobile" autocomplete="off" required/>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope-open"></i>
                            </span>
                        </div>
                        <input type="email" name="useremail" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="email" autocomplete="off" required/>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </span>
                        </div>
                        <input type="text" name="useraddress1" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Address line 1" autocomplete="off" required/>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </span>
                        </div>
                        <input type="text" name="useraddress2" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="address line 2" autocomplete="off" required/>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <input type="password" name="userpassword" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Password" autocomplete="off" required/>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <input type="password" name="usercpassword" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Confirm Password" autocomplete="off" required/>
                    </div>
<!-- 
                    <button type="submit" name="submit" class="btn-block"><a href="#" class="btn btn-block btn-danger">Create An Account</a></button> -->


                    <div class="contactbtn text-center"><input class="contactusbtn" name="submit1" type="submit" value="Create an Account"></div> 

                  <p class="text-center text-white loginsubmit">Already have an account ? <a href="login.php" class="text-primary submit">Log In</a></p>
                </form>
            </div>
        </div>
    </div>


</body>

</html>