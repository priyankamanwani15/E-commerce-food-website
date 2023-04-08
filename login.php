<!-- 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="sapribha.css">
</head>
<body class="pagethree">
    <div >
        <div id="loginheading">
            <h3 class="headings" id="loginhead">LOGIN NOW</h3>
        </div>

        <div id="loginbox">
            <form id="loginform" action="login.php" method="post">
                <label for="name">Username</label>
                <input type="text" name="username" id="name" placeholder="Username" required>
                <label for="pass" >Password</label>
                <input type="password"  name="paswd" placeholder="Password" id="pass" required>
                <button type="submit" name="sb" class="submitbtn">login</button>
                <button id="signup" class="submitbtn" name="signup"> <a href="signup.html">signup</a></button>
        </div>
    </div>
    <img src="photos\blackbg.jpg" width="700" alt="">  -->

<?php

$username=$_POST['username'];
$paswd=$_POST['paswd'];

$conn = new mysqli('localhost','root','','sapribha');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql =  $conn->prepare("SELECT * FROM signup Where username = ? ");
$sql->bind_param("s",$username);
$sql->execute();
$sql_result = $sql->get_result();

// echo "<link rel='stylesheet' type='text/css' href='sapribha.css' />";



if ( $sql_result -> num_rows > 0) {
  // output data of each row
  $data = $sql_result->fetch_assoc();
 if($data['paswd']===$paswd){
    echo "login successfully!";
    
  }else{
    echo "invalid username or password ";
  }
} else {
  echo "invalid username or password";
}

mysqli_close($conn);
?>    
</body>
</html>


