<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser\Services;

use Kemel91\HtmlParser\Entity\Tags;

class ContentParser
{
    private string $html;

    public function __construct(string $html)
    {
        $this->html = $html;
    }

    public function tags(): Tags
    {
        \preg_match_all('/<([^\/!= ][a-z1-9]*)/i',$this->html,$arr);

        return new Tags(\end($arr));
    }
}