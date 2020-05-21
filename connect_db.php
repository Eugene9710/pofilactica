<?php
    include('config.php');
    $conn = mysqli_connect($config['db']['server'], 
                           $config['db']['user'], 
                           $config['db']['pass'],
                           $config['db']['dbname']
    );
    
    $log_charset = array("Изначальная кодировка: " . $conn->character_set_name());
      
    if (!$conn->set_charset("utf8")) {
        printf("Ошибка при загрузке набора символов utf8: %s\n", $conn->error);
        exit();
    } else {
        array_push($log_charset, "Текущий набор символов: " . $conn->character_set_name());
    }
    
    if($conn == false) {
        echo 'Не удалось подключиться к бд <br>';
        echo mysqli_connect_error();
        exit();
    }
?>