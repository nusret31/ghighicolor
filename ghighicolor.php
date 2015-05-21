<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dropdown";

$connection = new mysqli($host,$user,$pass,$db);
 

if ($connection->connect_error) {
  trigger_error('Database connection failed: '  . $connection->connect_error, E_USER_ERROR);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Shit</title>
	<link rel="stylesheet" href="ghighicolor.css">

  
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script type='text/javascript' src='ghighicolor.js'></script>

 <script>
  //  alert("Change the color, bitch!"); 
</script>

</head>
<body>

<h1>Shit</h1>

<div id ="navbar">

 <ul>
   <li><a href="#">Menu1</a>
     <ul>

        <li><a href="#">Black</a></li>
        <li><a href="#">Blue</a></li>
        <li><a href="#">Brown</a></li>
        <li><a href="#">Cyan</a></li>
     </ul>
   <li>
      <li><a href="#">Menu1</a>
     <ul>
        <li><a href="#">Gold</a></li>
        <li><a href="#">Green</a></li>
        <li><a href="#">Indigo</a></li>
        <li><a href="#">Khaki</a></li>
     </ul>
   <li>
      <li><a href="#">Menu1</a>
     <ul>
        <li><a href="#">Magenta</a></li>
        <li><a href="#">Pink</a></li>
        <li><a href="#">Red</a></li>
        <li><a href="#">Violet</a></li>
     </ul>
   <li>
 </ul>
</div>


</body>
</html>


