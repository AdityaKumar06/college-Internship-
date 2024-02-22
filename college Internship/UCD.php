<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assests/registration.css">
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
  margin-top: 20%;
  margin-right: 
}

</style>
</head>

  

<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
           
        </ul>
    </nav>
</div>

<form>
    <fieldset>
      <legend id="reg">UPDATE</legend>
      <br>
      <label for="CD"> COMPANY ID</label> 
        <input type="text" name="USN" placeholder="Enter Company name" required  autocomplete="off" >

      <label for="Name"> NAME </label>      
        <input type="text" name="Name" placeholder="Enter Name" required  autocomplete="off">
      
      <label for="Email"> EMAIL </label>      
      <input type="email" name="Email" placeholder="Enter Email-Id"  autocomplete="off">
      
      <label for="Phone"> PHONE</label>  
      <input type="text" name="Phone"  placeholder="Enter Phone no" autocomplete="off">
      <br>
      <button type="submit" name="submit"><b> SUBMIT </b> </button>
      <br>
      <br>
      </fieldset>
  </form>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>