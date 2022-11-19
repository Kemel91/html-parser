<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser\Factory;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class RequestFactory
{
    public static function make(string $url): RequestInterface
    {
        return new Request('GET', $url);
    }
}