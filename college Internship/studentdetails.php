
<?php 
include 'app/connect.php';
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
<link rel="stylesheet" href="assets/login.css">

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
  margin-top: 10%;
  
}


     table {
  border-collapse: collapse;
  width: 50%;
 border-radius: 10px;
}

td{
  padding: 8px;
  text-align: left;
  color: black;

}

 th {
  padding:8px;
  text-align: left;
  background-color: #32CD32;
  color: white;
}


tr:hover 
{
     background-color:white;
     
}

table.center {
  margin-left: auto; 
  margin-right: auto;
background-color:#FFFACD;

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
    	<ul>  <li id="n1"><b>Admin:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Alogin after.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
</div>
<hr>




<body>
 <fieldset>
    <form method="post" action="studentdetails.php">
     <h3><u>Student details</u></h3>        



<table class="center">
    <tr>
      <th>USN</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DEPARTMENT</th>
      <th>PHONE</th>
      <th>GRADUATION YEAR</th>
      
      
    
    </tr>
    <?php
      $sql = "SELECT S.USN,S.NAME,S.EMAIL,S.DEPARTMENT,S.GRAD,S.PHONE FROM student S";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['USN']; ?> </td>
      <td> <?php echo $row['NAME']; ?> </td>
      <td> <?php echo $row['EMAIL']; ?> </td>
      <td> <?php echo $row['DEPARTMENT']; ?> </td>
      <td><?php echo $row['PHONE']; ?></td>
      <td> <?php echo $row['GRAD']; ?> </td>
      
        
    </tr>
    <?php
      }
    ?>
  </table>
</form>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>