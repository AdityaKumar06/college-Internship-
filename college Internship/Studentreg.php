<?php 
include 'app/connect.php';

if(isset($_POST['submit'])){

    $USN = $_POST['USN'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm = $_POST['ConfirmPassword'];
    $Phone = $_POST['Phone'];
    $Department = $_POST['Department'];
    $GraduationYear = $_POST['Year'];

    $pass = password_hash($Password, PASSWORD_DEFAULT);
    
    $usn_check = "SELECT * FROM student WHERE USN = ?";
    $usn_stmt = $conn->prepare($usn_check);
    $usn_stmt->bind_param("s",$USN);
    $usn_stmt->execute();

    $usn_stmt->store_result();
    if($usn_stmt->num_rows()>0){
        ?> 
        <script type="text/javascript"> alert(" User ALready Registered!");</script>
        <?php
    }
    else{


    //template for the sql query
    $sql = "INSERT INTO student(USN,NAME,EMAIL,PASSWORD,PHONE,DEPARTMENT,GRAD) VALUES(?,?,?,?,?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisi",$USN,$Name,$Email,$pass,$Phone,$Department,$GraduationYear);
    $result = $stmt->execute();

    if($result){
       header("location:Studentlogin.php");
    }
  }
}
/*
    $expectedData = 1;
    $spoiledData = "1; DROP TABLE student";
    $query = "select * from student where USN = $spoiledData";
    select * from student where USN=1; 
    Drop table student;
*/

?>




<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="assests/registration.css">
<style>
body
{
     background-image: url("img/1d.jpg");;
    background-repeat: no-repeat;
    background-size:cover;
}

h1
{
   color:white;
   font-size: 70px;
   margin-top: 20%;
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
  margin-top: 20%;
  margin-right: 
}

</style>
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Alogin.php">Admin </a></li>
        </ul>
    </nav>
</div>
<hr>
<form onsubmit="return validate()" method="post" action="Studentreg.php">
    <fieldset>
      <legend id="reg">REGISTER</legend>
      <br>
      <label for="USN"> USN </label> 
        <input type="text" name="USN" placeholder="Enter UserID" required autocomplete="off" >

      <label for="Name"> NAME </label>      
        <input type="text" name="Name" placeholder="Enter Name" required  autocomplete="off">
      
      <label for="Email"> EMAIL </label>      
      <input type="email" name="Email" placeholder="Enter Email-Id"  autocomplete="off">
      
      <label for="Password"> PASSWORD </label>  
      <input type="password" name="Password" id="password" placeholder="Enter Password" autocomplete="off">
      
      <label for="ConfirmPassword"> CONFIRM PASSWORD </label> 
      <input type="password" name="ConfirmPassword" id="confirmPassword" placeholder="Re-Enter Password" autocomplete="off">

      <label for="Phone"> MOBILE NUMBER </label> 
      <input type="tel" name="Phone" placeholder="Enter valid mobile no." maxlength="10" autocomplete="off">
      
      <label for="Department"> DEPARTMENT </label>      
        <select name="Department">
          <option value="">Select...</option>
          <option value="CSE">Computer Science Engineering</option>
            <option value="MECH">Mechanical Engineering</option>
            <option value="IEM">Industrial Engineering and Management</option>
            <option value="CIVIL">Civil Engineering</option>
            <option value="ISE">Information Science Engineering</option>
            <option value="ECE">Electronics and Communication Engineering </option>
            <option value="EIE">Electronics and Instrumentation Engineering </option>
          </select> 
          
        <label for="Year"> GRADUATION YEAR </label>
        <input type="number" name="Year" min="2021" max="2099" step="1" value="2021" /><br>
      <button type="submit" name="submit"><b> SUBMIT </b> </button>
      <br>
      <a href="Studentlogin.php" style="text-decoration: none; color:white"> Already Have an Account? </a>
      <br>
      </fieldset>
  </form>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>