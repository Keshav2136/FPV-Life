<?php
include 'securimage.php';
$img = new securimage();
$img->ttf_file = "elephant.ttf";
//$img->ttf_file = "ALGER.TTF";
$img->image_height = 29;
$img->text_angle_minimum='35';
$img->image_bg_color = "#F5F1BA";
$img->use_multi_text=true;
$img->multi_text_color = "#0a68dd,#f65c47,#8d32fd";
$img->show(); // alternate use:  $img->show('/path/to/background.jpg');