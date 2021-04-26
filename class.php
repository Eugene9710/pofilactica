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
  <div class="last-work">
        <p class="class"><?php echo($rec['NomerClass']) ?></p>    
        <p class="name"><?php echo($rec['Whiteboard']) ?></p>
        <p class="desc"><?php echo($rec['Screen']) ?></p>
        <p class="data"><?php echo($rec['TV']) ?></p><hr>
        <p class="description"><?php echo($rec['Description']) ?></p><hr>
        <p class="nomerPC"><?php echo($rec['NomerPC']) ?></p><hr>
        <p class="accessories"><?php echo($rec['Accessories']) ?></p><hr>
        <p class="descriptionPC"><?php echo($rec['DescriptionPC']) ?></p><hr>
  </div>

  
</body>
</html>