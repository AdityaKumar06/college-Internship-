<?php
include 'app/connect.php';

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
   font-size:70px;
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
  margin-top: 30%;
  
}


.ad {
  border: 1px solid black;
  background-color: lightyellow;
  padding-top: 40px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 50px;
}

h3{
  color: black;
  font-size: 35px;

}
#cl1{
  padding-bottom: 20px;
  font-size: 20px;


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
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>
<h1 align=center><u>College Internship System</u></h1>
<br>
<div class="ad">
<h3><u>About</u></h3>
<p id="cl1"><p>An internship provides the work experience that helps students put their education into practice, develop their leadership skills and give them a competitive advantage as they pursue a permanent pAn internship is a period of work experience offered by an organization for a limited period of time.Once confined to medical graduates, internship is used for a wide range of placements in businesses, non-profit organizations and government agencies. They are typically undertaken by students and graduates looking to gain relevant skills </p><p>Internships for professional careers are similar in some ways. Similar to internships, apprenticeships transition students from vocational school into the workforce.The lack of standardization and oversight leaves the term "internship" open to broad interpretation. Interns may be high school students, college and university students, or post-graduate adults. An internship consists of an exchange of services for experience between the intern and the organization. Internships are used to determine if the intern still has an interest in that field after the real-life experience. In addition, an internship can be used to create a professional network that can assist with letters of recommendation or lead to future employment </p>
</div>
<footer>
  <p>Developed By Aditya kumar</p>
 </footer>

</body>
</html>