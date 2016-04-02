<?php
if(!empty($_GET)){
    $img =   imagecreatefromjpeg($_GET['foto']);
    $x1 =    $_GET['x1'];
    $y1 =    $_GET['y1'];
    $x2 =    $_GET['x2'];
    $y2 =    $_GET['y2'];
    $angle = $_GET['angle'];
    
//getimagesize("picture.jpg");
//ImageCopyResized("heart.jpg", "pic.jpg", 0, 100, 100, "",);
//header ("Content-type: image/jpg"); // выводим заголовок
imagepng($img);  
    

    
    
    
    
}
?>