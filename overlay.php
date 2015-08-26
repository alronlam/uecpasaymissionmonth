<?php 

// header ("Content-type: image/jpeg");   
// Defining the background image. Optionally, a .png image   // could be used using imagecreatefrompng   
$background = imagecreatefromjpeg(__DIR__.'/resources/profpic.jpg');   
// Defining the pocket image     
$pkt = imagecreatefrompng( __DIR__.'/resources/overlay5.png');   

// Get pocket image width and hight for later use  

$insert_x = imagesx($pkt);   $insert_y = imagesy($pkt);   
// Combine the images into a single output image   
imagecopymerge($background,$pkt,0,0,0,0,$insert_x,$insert_y,50);   

// Output the results as a jpg image,   
//you can also generate output as png, gif as per your requirement   
$uuid = uniqid(); 
$processedImgPath = __DIR__.'/resources/processed_'.$uuid.'.jpg';
imagejpeg($background, $processedImgPath, 100);
imagedestroy($background);

// unlink($processedImgPath);

?>