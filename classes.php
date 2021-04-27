<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Классы:</title>
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
  <h1>Классы:</h1>
    
    <div id="title">
      <ul>
        <li>Номер</li>
        <li>Интерактивная доска</li> 
        <li>Эктран</li> 
        <li>Телевизор</li> 
      </ul>
    </div>
    <br>
    <?php 
        $result = mysqli_query($conn, "SELECT `NomerClass`, `Whiteboard`,`Screen`,`TV` FROM `classrooms`;"); 
         
        while($rec = mysqli_fetch_assoc($result)) {
    ?>    
    <div id="class_room">
      <a href="class.php?class=<?php echo($rec['NomerClass'])?>">
        <div id="class_filer">
          <p>№<?php echo($rec['NomerClass'])?></p>
          <p><?php echo($rec['Whiteboard'])?></p>
          <p><?php echo($rec['Screen'])?></p>
          <p><?php echo($rec['TV'])?></p>
        </div>
      </a>
    </div>
    <br>
    <?php
    }
    ?>  

</body>
</html>


<!--<div id="class_room">
      <a href="class.php?class=<?php echo($rec['NomerClass'])?>">
        <ul class="classes_room">
          <li class="nomer">
            <div>№<?php echo($rec['NomerClass'])?></div>  
          </li>    
          <li>              
            <div><?php echo($rec['Whiteboard'])?></div>
          </li>
          <li>               
            <div><?php echo($rec['Screen'])?></div>
          </li>
          <li>               
            <div><?php echo($rec['TV'])?></div>
          </li>
        </ul>
      </a>
    </div>