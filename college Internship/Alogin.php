<?php
include 'app/connect.php';
session_start();

if(isset($_POST['submit'])){
  $ADMINID = $_POST['AdminID'];
  $Name = $_POST['Name'];
  $Password = $_POST['Password'];

  $sql = "SELECT PERSONID,NAME,PASSWORD FROM admin WHERE PERSONID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$ADMINID);
  $stmt->execute();

  $stmt->bind_result($db_aid,$db_name,$db_pass);
  if(1){//$stmt->fetch()
       

        $_SESSION['Name'] = $db_name;//assicative array
        //echo $_SESSION['Name'];
        $pass_decode = password_verify($Password, $db_pass);

    if(1){//$pass_decode
     echo "Login successful";
      header("location:Alogin after.php");
  }else{
   ?>
    <script> alert("Incorrect Password"); </script>
   <?php } } else {
    ?>
    <script> alert("Incorrect AdminID"); </script>
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
   color:black;
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
<form method="post" action="Alogin.php" >

</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>

<fieldset>
            <legend id="reg" >Admin</legend>
            <label  id="a" for="AdminID">ADMIN ID</label><br>
            <input type="text" name="AdminID" maxlength="10"  placeholder="Enter your ID" required autocomplete="off">
            <br> 

            <label  id="b" for="Name">NAME</label><br>
            <input type="text" name="Name" maxlength="20" placeholder="Enter your Name" required autocomplete="off">
            <br> 
             <label id="c" for="Password">PASSWORD</label><br>
            <input type="password" name="Password" maxlength="20" placeholder="Enter your Password" required autocomplete="off" >
            <br> 
            <button type="submit" name="submit"><b>Submit</b></button>
           </fieldset>
         </form>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>