<?php
$size = filesize("D:\Music\\IEEE-pro.mp4");
echo "Size In Megabytes Is ". round($size / pow(1024,2))."<br>";
echo "Size In Kilobytes Is ". round($size / 1024)."<br>";
?>
