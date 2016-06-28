<?php
/**
 * Created by PhpStorm.
 * User: Тоха
 * Date: 26.06.2016
 * Time: 16:58
 */

namespace App;


class ImageProcessor
{
    public function resizeImg($name, $filePath, $param)
    {
        $im = new \Imagick($name);
        if(array_key_exists('thumbwidth', $param) and array_key_exists('thumbheight', $param)){
            $thumbwidth = (int)$param['thumbwidth'];
            $thumbheight = (int)$param['thumbheight'];
            $im->thumbnailImage($thumbwidth, $thumbheight);
        }
        if(array_key_exists('cropwidth', $param) and array_key_exists('cropheight', $param)){
            $cropwidth = (int)$param['cropwidth'];
            $cropheight = (int)$param['cropheight'];
            $im->cropThumbnailImage($cropwidth, $cropheight);
        }
        $im->writeImage($filePath);
    }
}