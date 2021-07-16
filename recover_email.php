<?php
$title="SignUp";
require_once 'include/session.php';
require_once 'include/resetemailstyle.php';
require_once 'database/connection.php';

if(isset($_POST['submit1'])){

$useremail = mysqli_real_escape_string($con, $_POST['useremail']);

$emailquery = "SELECT * FROM signup WHERE useremail='$useremail'";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);

if($emailcount){
    
    $userdata = mysqli_fetch_array($query);
    $username = $userdata['username'];
    $userpassword =$userdata['userpassword'];
    $subject ="Password Recovery";
    $body = "Hi, $username. \n Your Password is \n $userpassword ";
    $sender_email="From: nidhisingh25901@gmail.com";

    if(mail($useremail,$subject,$body,$sender_email)){
        ?>
          <script>
            alert("Your Password has been sent to your registered email id");
          </script>
        <?php 
    } else{
        ?>
        <script>
           alert("Error sending email"); 
         </script>
         <?php
    }

} else{
    ?>
     <script>
         alert("email does not exist");
     </script>
    <?php
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


</head>

<body>


    <div class="container-fluid login">
        <div class="card loginbg">
            <div class="card-body mx-auto">
                <h4 class="card-title mt-3 text-center heading">Recover Password</h4>
               

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            
                        
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope-open"></i>
                            </span>
                        </div>
                        <input type="email" name="useremail" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="email" autocomplete="off" required/>
                    </div>

<!-- 
                    <button type="submit" name="submit" class="btn-block"><a href="#" class="btn btn-block btn-danger">Create An Account</a></button> -->


                    <div class="contactbtn text-center"><input class="contactusbtn" name="submit1" type="submit" value="Recover Account"></div> 

                 
                </form>
            </div>
        </div>
    </div>


</body>

</html>