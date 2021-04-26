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
  ?>

  <article class="clearfix">
  <h2>Последние работы</h2>
    <br>
    <?php 
        $result = mysqli_query($conn, "SELECT `NomerClass`, `Whiteboard`,`Screen`,`TV` FROM `classrooms`;"); 
         
        while($rec = mysqli_fetch_assoc($result)) {
    ?>   
     
    <a href="class.php?class=<?php echo($rec['NomerClass']) ?> ">
      <div class="last-work">
        <p class="class"><?php echo($rec['NomerClass']) ?></p>    
        <p class="name"><?php echo($rec['Whiteboard']) ?></p>
        <p class="desc"><?php echo($rec['Screen']) ?></p>
        <p class="data"><?php echo($rec['TV']) ?></p><hr>
      </div>
    </a>
    <?php
    }
    ?>  

</body>
</html>