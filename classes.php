<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Классы:</title>
	<?php 
        include('connect_db.php');
  ?> 
  <link rel="stylesheet" href="styles/article_style.css">
  <link rel="stylesheet" href="styles/classes.css">
</head>
<body>
	<?php 
    include('header.html');
  ?>

  <article class="clearfix">
  <h1>Классы:</h1>
    
    <div id="title">
      <ul>
        <li >Номер</li>
        <li>Интерактивная доска</li> 
        <li>Эктран</li> 
        <li>Телевизор</li> 
      </ul>
    </div>
    <br>
    <?php 
        $result = mysqli_query($conn, "SELECT `NomerClass`, `Whiteboard`,`Screen`,`TV` FROM `classrooms`;"); 
        $i = 1; 
        while($rec = mysqli_fetch_assoc($result)) {
    ?>    
    <div id="class_room">
      <a href="class.php?class=<?php echo($rec['NomerClass'])?>">
        <!--<div id="class_filer">-->
          <span class="nomer">№<?php echo($rec['NomerClass'])?></span>
          <span class="board"><?php echo($rec['Whiteboard'])?></span>
          <span class="scrin"><?php echo($rec['Screen'])?></span>
          <span class="tv"><?php echo($rec['TV'])?></span>
        <!--</div>-->
      </a>
      <br>
    </div>
    
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