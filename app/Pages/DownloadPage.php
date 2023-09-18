<?php

namespace app\Pages;

class DownloadPage
{
    public function download(string $type, string $version, string $date): string
    {
        return "/source/v$version/simpl_" . ($type == 'add-ons' ? 'add-ons_' : '') . "$version" . "_$date.zip";
    }
}
