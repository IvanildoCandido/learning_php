<?php
$file = 'paisagem.jpg';
$maxWidth = 500;
$maxHeight = 500;

list($originalWidth, $originalHeight) = getimagesize($file);

$originalRatio = $originalWidth / $originalHeight;
$newImageRatio = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($newImageRatio > $originalRatio) {
    $finalWidth = $maxHeight / $originalRatio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $originalRatio;
    $finalWidth = $maxWidth;
}

$image = imagecreatetruecolor($finalWidth, $finalHeight);

$originalImage = imagecreatefromjpeg($file);

imagecopyresampled(
    $image,
    $originalImage,
    0,
    0,
    0,
    0,
    $finalWidth,
    $finalHeight,
    $originalWidth,
    $originalHeight
);

header("Content-Type: image/jpeg");
imagejpeg($image, null, 100);
