<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Классы</title>
	<?php 
        include('connect_db.php');
  ?> 
  <link rel="stylesheet" href="styles/header_nav_style.css">
  <link rel="stylesheet" href="styles/article_style.css">
</head>
<body>
	<?php 
        include('header.html');
        $class = $_GET["class"];     
  ?>
  <article class="clearfix">
  <h2>Класс №<?php echo $class?></h2>
  <?php 
        $result = mysqli_query($conn, "SELECT `classrooms`.`NomerClass`, `Whiteboard`, `Screen`, `TV`,  `Description`, `NomerPC`, `Accessories`, `DescriptionPC` FROM `classrooms` inner join `pc` on `pc`.`NomerClass` = `classrooms`.`NomerClass` WHERE `classrooms`.`NomerClass` = $class;");   
        $rec = mysqli_fetch_assoc($result)  
  ?>
  <hr>
  <div class="class_room">
      <ul>
        <li><?php echo($rec['NomerClass']) ?></li>    
        <li><?php echo($rec['Whiteboard']) ?><li>
        <li><?php echo($rec['Screen']) ?><li>
        <li><?php echo($rec['TV']) ?><li>
        <li><?php echo($rec['Description']) ?><li>
        <li><?php echo($rec['NomerPC']) ?><li>
        <li><?php echo($rec['Accessories']) ?><li>
        <li><?php echo($rec['DescriptionPC'])?><li>
      </ul>
  </div>
  <br>
  <hr>
</body>
</html>