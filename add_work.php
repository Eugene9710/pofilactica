<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление работы</title>
	<?php 
        include('connect_db.php');
    ?> 

  <link rel="stylesheet" href="styles/article_style.css">
  <link rel="stylesheet" href="styles/add_ctyle.css">
</head>
<body>
	<?php 
        include('header.html');
    ?>
	
	<article>
			<form action="action.php" method="post">
 				<p>Введите класс: <input type="text" name="class" /></p>
 				<p>Введите название работы: <input type="text" name="name" /></p>
 				<p>Введите дату: <input type="date" name="date" /></p>
 				<div class="textarea">
 					<p >Описание:</p>
 					<p ><textarea  name="name" rows="4" cols="60" ></textarea></p>
 					
 				</div><br>
 				<p><input type="submit" /></p>
			</form>
	</article>

</body>
</html>