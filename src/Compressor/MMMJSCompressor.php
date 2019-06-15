<?php declare(strict_types=1);

namespace WyriHaximus\HtmlCompress\Compressor;

use MatthiasMullie\Minify\JS;

final class MMMJSCompressor extends Compressor
{
    protected function execute(string $string): string
    {
        return (new JS($string))->minify();
    }
}
