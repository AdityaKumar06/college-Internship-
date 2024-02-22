<?php 
include 'app/connect.php';

 session_start();
 if(!isset($_SESSION['Name']))
 {
   header("location:Alogin.php");
 }

if (isset($_POST['submit'])) {
   
   $GRD = $_POST['GRD'];
   
  
  /*$sql = "DELETE FROM student WHERE GRAD =?"
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i",$GRAD);
  $result = $stmt->execute();
*/



  $sql = " DELETE FROM student WHERE GRAD = ? ";
  $stmt =$conn->prepare($sql);
  $stmt->bind_param("i",$GRD);
  $stmt->execute();
  echo "$stmt->error";
  
if($stmt){
  ?>
  <script>alert("deleted sucessfully...");</script>
  <?php
}
  else{
    echo "not deleted";
  }
  
   
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>CIS</title>



  <link rel="stylesheet" type="text/css" href="assests/login.css">
   

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
    color: white;
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
  margin-top: 40%;
  
}


     table {
  border-collapse: collapse;
  width: 50%;
 
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color: white;
}

tr:hover 
{
     background-color:#33BBFF;
     
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

h3{
  color: white;
  text-align: center;
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
      <ul> <li id="n1"><b>Admin:<?php echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Alogin after.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
</div>
<hr>






 <fieldset>
    <form method="post" action="deleteyear.php">
           
            <label for="GRAD">Graduation Year</label>
            <input type="text" name="GRD"  placeholder="Enter the year" required>
            <br> 
             
            <button type="submit" name="submit"><b>Submit</b></button>
            <br>
      
           </fieldset>
       </form>


       <footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>