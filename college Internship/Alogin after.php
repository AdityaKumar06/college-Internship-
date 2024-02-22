<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Alogin.php");
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
  margin-top: 60%;

}
          #leftbox { 
                float:left;  
                background:greenyellow; 
                width:20%; 
                height:100px; 
                font-size: 20px;
                font-family: verdana;
                padding: 20px;
                margin-left:5%; 
                margin-top: 15%;
                border-radius: 10px;



            } 
            #middlebox{ 
                float:left;  
                background:greenyellow; 
                width:20%; 
                height:100px;
                font-family: verdana;
                font-size: 20px;
                padding: 20px;
                margin-left: 11%;
                margin-top: 15%;
                border-radius: 10px;

            } 
            #rightbox{ 
                float:right; 
                background:greenyellow; 
                width:20%; 
                height:100px;
                font-family: verdana;
                font-size: 20px;
                padding: 20px; 
                margin-right: 5%;
                margin-top: 15%;
                border-radius: 10px;
            } 

            #b1{
              padding-left: 20px;
              color: black;
              }
            #b2{
              padding-left: 20px;
              color: black;
              }
              #b3{
              padding-left: 20px;
              color: black;
              
              }


              h2{
                text-align: center;
                color: white;

              }


              #m1
              {
                text-align: center;
                color: white;
                font-family: verdana;
                font-size: 30px;
              }


              #n1{
                color: white;
                font-family: verdana;
                font-size: 20px;
              }
              
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
         <li id="n1"><b>Admin:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href=logout.php>Logout</a></li>
            </ul>
    </nav>
</div>
<hr>
<!--<h3 id="m1">Welcome</h3>
<h2><?php  echo $_SESSION['Name'];  ?></h2>
-->

<div id = "boxes"> 
          
              <a href="studentdetails.php">
            <div id = "leftbox"> 
           <h3 id="b1">Student Details</h3>
            </div>  
              </a>

              <a href="update company details.php">
            <div id = "middlebox"> 
               <h3 id="b2">Update Company Details</h3> 
            </div> 
              </a>
              <a href="deleteyear.php">
            <div id = "rightbox"> 
             <h3 id="b3">Student Graduation Year</h3>
            </div> 
          </a>
        </div>

<footer>
  <p>Developed by ADITYA KUMAR</p>
 </footer>

</body>
</html>