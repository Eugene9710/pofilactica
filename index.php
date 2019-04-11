<!DOCTYPE html>
<html>
<head>
    <?php 
        include('connect_db.php');
    ?>
    <meta charset="utf-8">
    <title><?php $config['title']; ?></title>
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
        $result = mysqli_query($conn, "SELECT * FROM `preventivew_work` ORDER BY `DateWork` DESC LIMIT 10;"); 
         
        while($rec = mysqli_fetch_assoc($result)) {
    ?>   
     
    <div class="last-work">
        <p class="class"><?php echo($rec['NomerClass']) ?></p>    
        <p class="name"><?php echo($rec['NamePW']) ?></p>
        <p class="desc"><?php echo($rec['DateWork']) ?></p>
        <p class="data"><?php echo($rec['DescriptionPW']) ?></p><hr>
    </div>
    <?php
    }
    ?>  
         
    </article>
    
    <?php
        mysqli_close($conn);
        include('footer.html');
        
    ?>
</body>
</html>
