<?php
$ratio = 150;
$image = $_GET['f'];
$tableau = @getimagesize('./pics/'.$image);
$src = imagecreatefromjpeg('./pics/'.$image);
if ($tableau[0] > $tableau[1]) {
$im = imagecreatetruecolor(round(($ratio/$tableau[1])*$tableau[0]), $ratio);
imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$tableau[1])*$tableau[0]), $ratio, $tableau[0], $tableau[1]);
}
else {
$im = imagecreatetruecolor($ratio, round(($ratio/$tableau[0])*$tableau[1]));
imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($tableau[1]*($ratio/$tableau[0])), $tableau[0], $tableau[1]);
}
header ("Content-type: image/jpeg");
imagejpeg ($im);
?>