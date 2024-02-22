<?php 
include 'app/connect.php';
if (isset($_POST['submit'])) {
  $USN = $_POST['USN'];
}

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
  margin-top: 30%;
  margin-right: 
}
#d1
{
  text-align: center;
  font-family: verdana;
  color: white;
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

#n1{
    color: white;
    font-family: verdana;
     font-size: 20px;
    }


fieldset{
  width:30%;
  margin:20px auto;
  padding: 10px;
  background:rgba(0,0,0,0.3);
  margin-top: 5%;
  border-radius: 20px;
}

label{
  padding:5px;
  margin:10px;
  display: block;
  color: white;
  text-align: left;
}


input[type="email"],input[type="password"], input[type="text"], 
 input[type="number"],input[type="tel"]{
  display: block;
  padding:5px;
  margin:5px;
  border:none;
  border-bottom:1px solid black;
  outline: none;
  width:95%;
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
  margin:5px auto;
  padding: 5px;
  background:#fda2fc;
  cursor:pointer;
}
th
{
  color: white;
  font-family: verdana;
  font-size: 20px;
}

td
{
  color: black;
  font-size: 15px;
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


<form method="post" action="Placements.php">
    <fieldset>
      <label id="d1" for="USN">Enter the student USN</label>
      <input type="text" name="USN" autocomplete="off"><br>
    <button type="submit" name="submit">Search</button>
    </fieldset>
  </form>


<table class="center">
    <tr>
      <th>USN</th>
      <th>NAME</th>
      <th>COMPANY ID</th>
      <th>COMPANY NAME</th>
    </tr>
    <?php
      $sql = "SELECT S.USN, S.NAME, C.COMPANYID, C.CNAME FROM student S, company C, placements P  WHERE P.USN=S.USN AND P.COMPANYID = C.COMPANYID AND P.USN=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s",$USN); 
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_array(MYSQLI_ASSOC))
      {
    ?>
    <tr>
      
      <td> <?php echo $row['USN']; ?> </td>
      <td> <?php echo $row['NAME']; ?> </td>
      <td> <?php echo $row['COMPANYID']; ?> </td>
      <td> <?php echo $row['CNAME']; ?> </td>
      
    </tr>
    <?php
      }
    ?>
  </table>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>