<!-- <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="sapribha.css">
</head>

<body>
    <div class="pagefour">
        <div class="divisonincontainer">
            <nav class="navbar">
                <ul class="list">
                    <li><a href="sapribha.html">HOME</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="#">RATINGS</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                    <li><a href="login.html">LOGIN</a></li>
                </ul>


            </nav>
        </div>

         <div id="signuphead">
            <h3 class="headings" id="signhead">Sign Up</h3>
        </div>  -->

        <!-- <div>
            <p id="signuphead">signup</p>
        </div>

        <div id="signupcontainer">
            <form id="signupform" action="signup.php" method="post">
                <label for="name">Username</label>
                <input type="text" name="username" id="name" placeholder="Username">
                <label for="email">Email adress</label>
                <input type="email" name="Email" class="email" placeholder="email adress">
                <label for="number">Contact no.</label>
                <input type="number" name="contact" id="number" placeholder="mobile no.">
                gender :
                Male <input type="radio" name="gender" class="gender" value="M"> Female <input type="radio"
                    name="gender" class="gender" value="F">
                <label for="paswd" class="title">password:</label>
                <input type="password" class="paswd" name="paswd" placeholder="password">
                <label for="paswd" class="title"> confirm:</label>
                <input type="password" class="paswd" name="confirmpaswd" placeholder="password">
                <br><button type="submit" name="sb" class="submitbtn">submit</button></br>
            </form>
        </div>

    </div>

    <img src="photos\signupbg.jpg"  length=" 200" width="700"  alt="">  --> -->


    <?php

$username=$_POST['username'];
$Email=$_POST['Email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$paswd=$_POST['paswd'];
$confirmpaswd=$_POST['confirmpaswd'];

$conn = new mysqli('localhost','root','','sapribha');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $sql = $conn->prepare("INSERT INTO signup(username, Email, contact,gender,paswd,confirmpaswd)
  VALUES (?,?,?,?,?,?)");
  $sql->bind_param("ssisss",$username,$Email,$contact,$gender,$paswd,$confirmpaswd);
  if($paswd==$confirmpaswd){
    $sql->execute();
    echo "regitration done successfully!";
    $sql->close();
  
     $conn->close();
  }
  else{
    echo "password dosen't match!";
  }
 
}
?>


</body>

</html> 


