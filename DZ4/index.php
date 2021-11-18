<?php
$img = 'images/';

$dirs = scandir($img);
$images = [];
foreach ($dirs as $file) {
    if($file!=='.' && $file!=='..') {
        //if(is_file('$file')) {
            $images[] = $file;
        //}
    }
}

foreach ($images as $image) {
    echo '<a href="' . $img . '' . $image . '" target="_blank"><img src="' . $img . '' . $image . '" width = "500"></a>';
}