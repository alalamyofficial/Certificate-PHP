<?php

header('Content-Type: image/jpeg');

$font=realpath("Roboto-Medium.ttf");
$image=imagecreatefromjpeg("certificate-of-merit.jpg");
$color=imagecolorallocate($image,51,51,102);

//for award
$award ="PHP";
imagettftext($image,30,0,485,310,$color,$font,$award);

//for student
$name ="Mohamed Alalamey";
imagettftext($image,30,0,340,450,$color,$font,$name);

//for teacher
$teacher = "Adel Alalamey";
imagettftext($image,20,0,650,530,$color,$font,$teacher);

//for date
$currentDate = date("Y/m/d");
imagettftext($image,20,0,235,530,$color,$font,$currentDate);


imagejpeg($image);

//save certs
imagejpeg($image,"students/".$name.".jpg");

imagedestroy($image);

?>