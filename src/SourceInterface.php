<?php

namespace Kemel91\HtmlParser;

use Kemel91\HtmlParser\Services\ContentParser;

interface SourceInterface
{
    public function parse(): ContentParser;
}