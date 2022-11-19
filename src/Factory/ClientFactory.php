<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser\Factory;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

class ClientFactory
{
    public static function make(): ClientInterface
    {
        return new Client();
    }
}