<?php

namespace ImageRed;

require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;
use  Intervention\Image\Exception\NotSupportedException;

Image::configure(['driver' => 'imagick']);

class ImageRedact
{
    public static function water()
    {
        $sourse = __DIR__.'/'."image/1.jpg";
        $result = __DIR__.'/'.'image/2.jpg';
        $image = Image::make($sourse)
            ->resize(2000,null, function ($image) {
                $image->aspectRatio();
            })
            //rotate(0)
        ->save($result, 80);

        $image->save($result, 80);

        self::watermark($image);

        echo $image->response('png');

    }

    public static  function waterMark(\Intervention\Image\Image $image)
    {
        $image->text(
            "JUN \n DEV",
            10,
            15,
            function ($font){
                $font->file(__DIR__.'/'."image/timesnewromanpsmt.ttf")->size('200');
                $font->color(array(0,0,0, 1));
                $font->align('left');
                $font->valign('center');
            });
    }

}
