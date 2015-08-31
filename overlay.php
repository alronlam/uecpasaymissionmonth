<?php 

// header ("Content-type: image/jpeg");   
$overlay = imagecreatefrompng( __DIR__.'/resources/overlay5.png'); 
$profpicRaw = imagecreatefromjpeg(__DIR__.'/resources/profpic.jpg');  
$profpic = imagecreatefrompng( __DIR__.'/resources/blank.png'); 
$success = imagecopyresized($profpic, $profpicRaw, 0, 0, 0, 0,  540, 540, 720, 960);

// i
// include 'resize.php';  
// $overlay = smart_resize_image($image, $profPicData['width'], $profPicData['height']);

// Get pocket image width and hight for later use  

$insert_x = imagesx($overlay);   $insert_y = imagesy($overlay);   
// Combine the images into a single output image   
imagecopymerge($profpic,$overlay,0,0,0,0,$insert_x,$insert_y,50);   

// Output the results as a jpg image,   
//you can also generate output as png, gif as per your requirement   

$uuid = uniqid();
$processedImgPath = __DIR__.'/resources/processed_'.$uuid.'.jpg';
// imagejpeg($profpic);
imagejpeg($profpic, $processedImgPath);
imagedestroy($profpic);

// unlink($processedImgPath);

?>