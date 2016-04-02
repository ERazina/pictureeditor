
<form method = "post" enctype='multipart/form-data'>
    <input type='hidden' name='MAX_FILE_SIZE' value='300000'> 
    <input type='file' name='uploadfile'><br/>
    X1<input type="text" name = "x1"></br>
    Y1<input type="text" name = "y1"></br>
    X2<input type="text" name = "x2"></br>
    Y2<input type="text" name = "y2"></br>
    Угол поворота изображения<input type="text" name = "angle">
    <input type = "submit" value = "Загрузить">
</form>

<?php
$uploaddir = '/Applications/XAMPP/xamppfiles/temp/'; //загружаем файл во временное хранилище

$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
$temp_img = imagecreatefromjpeg ($uploadfile); // создаем новое изображение на основе старого
$get = getimagesize ($uploadfile);//получаем размеры изображения

// получаем новые размеры изображения

list($width, $height) = getimagesize($temp_img);
$percent = 0.5;
$newwidth = $width * $percent;
$newheight = $height * $percent;
//print_r ($get);
//ресайзим изображение
$new_img = ImageCopyResized($uploadfile, $temp_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
print_r ($new_img);
$green  = imagecolorallocate ($new_img, 235, 235, 103);
$temp_img_rotate = imagerotate ($new_img, 15, $green);//изображение, угол, цвет заливки пустот
$new_destination = '/Applications/XAMPP/htdocs/hw5/';//задаем новую папку куда перенесем готовое изображение
$img = move_uploaded_file($temp_img_rotate, "$new_destination/$name"); //перемещаем загруженный файл

//header ("Content-type: image/png"); // выводим заголовок
//imagejpeg($img); 



    
    
        //Путь к файлам /Applications/XAMPP/xamppfiles/temp/
    //$img =   imagecreatefromjpeg($_GET['foto']);
    //$x1 =    $_POST['x1'];
    //$y1 =    $_POST['y1'];
    //$x2 =    $_POST['x2'];
    //$y2 =    $_POST['y2'];
    //$angle = $_POST['angle'];
    


    
//getimagesize("picture.jpg");
//ImageCopyResized("heart.jpg", "pic.jpg", 0, 100, 100, "",);
//header ("Content-type: image/jpg"); // выводим заголовок
//imagepng($img);  


?>