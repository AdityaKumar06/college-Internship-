<?php
include 'app/connect.php';
session_start();

if(isset($_POST['submit'])){
  $USN = $_POST['USN'];
  $Password = $_POST['Password'];

  $sql = "SELECT USN,NAME,PASSWORD FROM student WHERE USN = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$USN);
  $stmt->execute();

  $stmt->bind_result($db_usn,$db_name,$db_pass);
  if($stmt->fetch()){
    //echo $db_usn;
      //echo $db_pass;
      $_SESSION['Name'] = $db_name;
      echo $_SESSION['Name'];
    $pass_decode = password_verify($Password, $db_pass);

    if ($pass_decode) {
      //echo "Login Successful";
      header("location:Student afterlogin.php");
    }else{ ?>
      <script> alert("Incorrect Password"); </script>
      <?php
    }
  }else { ?>
    <script> alert("Incorrect USN"); </script>
    <?php
  }
  
}

?>



<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body
{
     background-image: url("img/1d.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}

h1
{
   color:white;
   font-size: 70px;
   margin-top: 7%;
}          
nav 
{ 
  width:100%;
    height:80px;
    background-color:darkblue;
    line-height: 50px;
   
}
nav ul
{
    float: right;
    margin-right:30px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.8s all;
                
}
nav ul li a
{
    text-decoration: none;
    color: #fff;
    padding: 40px;
}
nav ul li:hover
{
    background-color: #f39d1a;
}

footer 
{
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
  margin-top: 17%;
  
}

fieldset{
  width:20%;
  margin:40px auto;
  padding: 10px;
  background:rgba(0,0,0,0.3);
  border-radius: 15px;
}
legend{
  border:1.5px solid white;
  border-radius: 13px;
  padding:5px;
  text-align: center;
  background: rgba(0,0,0,0.6);
  width:35%;
  margin:0px auto;
  display: inline;

}

label{
  padding:5px;
  margin:10px;
  display: block;

}
 input[type="password"], input[type="text"]{
  display: block;
  padding:5px;
  margin:10px;
  border:none;
  border-bottom:1px solid black;
  outline: none;
  width:85%;
  background-color: transparent;
  cursor: text;
}
::-webkit-input-placeholder{
    text-transform: uppercase;
    color:black;
}
button{
  border:1px solid #d59aea;
  border-radius:15px;
  display: block;
  width:35%;
  margin:40px auto;
  padding: 5px;
  outline: none;
  background:#fda2fc;
  cursor:pointer;
}
a{
  text-decoration: none;
  color:white;
}
#reg{
  color: white;
}

#a,#b,#c
{
  color: white;
}

</style>
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Alogin.php">Admin </a></li>
        </ul>
    </nav>
</div>
<hr>

<form action="Studentlogin.php" method="post">
<fieldset>
            <legend id="reg" >Student</legend>
            <label  id="a" for="USN">USN</label><br>
            <input type="text" name="USN" maxlength="10"  placeholder="Enter your USN" required autocomplete="off">
            <br> 
             <label id="c" for="Password">Password</label><br>
            <input type="password" name="Password"maxlength="10" placeholder="Enter your Password" required autocomplete="off" >
            <br> 
            <button type="submit" name="submit"><b>Submit</b></button>
            <br>
            <a href="Studentreg.php" style="text-decoration: none; color:white"> Signup... </a>
             <br>
           </fieldset>
         </form>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>
</body>
</html>