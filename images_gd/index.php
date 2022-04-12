<?php
$image = imagecreatetruecolor(300, 300);
$color = imagecolorallocate($image, 255, 0, 0);

imagefill($image, 0, 0, $color);

header("Content-Type: image/jpeg");

imagepng($image, 'new_image.png');

imagejpeg($image, null, 100);
