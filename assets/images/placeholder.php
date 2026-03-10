<?php
header('Content-Type: image/svg+xml');

$width = max(64, min((int)($_GET['w'] ?? 500), 2048));
$height = max(64, min((int)($_GET['h'] ?? 300), 2048));
$text = htmlspecialchars(($_GET['t'] ?? ''), ENT_QUOTES | ENT_XML1, 'UTF-8');

$font = $width / 10;

if (empty($text)) $text = "$width × $height";
$text = substr($text,0,11); //e.g. 1920 × 1080 = 11 characters

echo "<?xml version='1.0' encoding='UTF-8'?>

<svg width='$width' height='$height' xmlns='http://www.w3.org/2000/svg'>
	<rect width='$width' height='$height' fill='#cccccc' />
	<text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-family='Calibri, Arial, sans-serif' font-size='$font' fill='#222222'>
		$text
	</text>
</svg>";
