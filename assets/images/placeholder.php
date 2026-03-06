<?php
header('Content-Type: image/svg+xml');

$width = (int)$_GET['w'] ;
$height = (int)$_GET['h'];

//fallbacks for false/null/empty
$width = $width ? $width : 500 ;
$height = $height ? $height : 300 ;
$font = $width / 10;

echo "<?xml version='1.0' encoding='UTF-8'?>

<svg width='$width' height='$height' xmlns='http://www.w3.org/2000/svg'>
  <rect width='$width' height='$height' fill='#cccccc' />
  <text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle'
        font-family='Calibri, Arial, sans-serif' font-size='$font' fill='#222222'>
      $width × $height
  </text>
</svg>";
