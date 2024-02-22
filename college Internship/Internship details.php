<?php
include 'app/connect.php';

session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

}
?>
<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }
body
{
     background-image: url("img/1d.jpg");
    background-repeat: no-repeat;
    background-size:cover;
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
  margin-top: 10%;
  margin-right: 
}


table {
 border-collapse: collapse;
 width: 90%;
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


  h3
  {
    color: black;
    text-align: center;
    font-family: verdana;
    font-size: 30px;
    color: white;
  }
</style>
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li id="n1"><b>User:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Student afterlogin.php">Dashboard</a></li>
            <li><a href="logout1.php">logout</a></li>
        </ul>
    </nav>
</div>
<hr>
<h3><u>Internships details</u></h3>

<hr>

<table class="center">
    <tr>
      <th>INTERNSHIP ID</th>
      <th>COMPANY NAME</th>
      <th>DESCRIPTION</th>
      <th>LOCATION</th>
      <th>START_DATE</th>
      <th>END_DATE</th>
      <th>SKILLS</th>
    
    </tr>
    <?php
      $sql = "SELECT I.INTERNSHIP_ID,I.DESCRIPTION,I.LOCATION,I.START_DATE,I.END_DATE,I.SKILLS,C.CNAME FROM internship I, company C WHERE I.COMPANYID=C.COMPANYID";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['INTERNSHIP_ID']; ?> </td>
      <td> <?php echo $row['CNAME']; ?> </td>
      <td> <?php echo $row['DESCRIPTION']; ?> </td>
      <td> <?php echo $row['LOCATION']; ?> </td>
      <td> <?php echo $row['START_DATE']; ?> </td>
       <td> <?php echo $row['END_DATE']; ?> </td>
        <td> <?php echo $row['SKILLS']; ?> </td>
    </tr>
    <?php
      }
    ?>  
  </table>
  <footer>
  <p>Devloped by Aditya Kumar</p>
 </footer>
</body>
</html>