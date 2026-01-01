<?php

namespace app\Pages;

use app\Models\Page;
class DocsPage
{
    public function __construct(Page $page)
    {
        $page->subtitle = 'Documentation';
    }
}
