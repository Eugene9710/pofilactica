<?php
	try {
		mysqli_close($link);	
	} catch (Exception $e) {
		echo "<script>alert('Ошибка закрытия соединения базы данных " . $e . "');</script>";	
	}	
?>