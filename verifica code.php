<?php 
    // prepare the canvas
    $im=imagecreatetruecolor(100, 50);

    // prepare the paint
    $white=imagecolorallocate($im, 255, 255, 255);
    $red=imagecolorallocate($im, 255, 0, 0);
    $grayred=imagecolorallocate($im, 255, 100, 100);
    $green=imagecolorallocate($im, 0, 255, 0);
    $blue=imagecolorallocate($im, 0, 0, 255);
    $gray=imagecolorallocate($im, 200, 200, 200);
    $black=imagecolorallocate($im, 0, 0, 0);

    // background filling
    imagefill($im, 0, 0, $gray);

    // paint pic or text
    $str="You";
    $file="front/msyh.ttf";
    imagettftext($im, 20, 0, 5, 40, $black, $file, $str);

    $fw=imagefontwidth(20);
    $fh=imagefontheight(20);

    // output
    header("content-type:image/png");

    imagepng($im);
    imagedestroy($im);

?>
