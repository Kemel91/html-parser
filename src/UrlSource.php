<?php
declare(strict_types=1);

namespace Kemel91\HtmlParser;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

class UrlSource implements SourceInterface
{
    private RequestInterface $request;

    private ClientInterface $client;

    public function __construct(RequestInterface|string $request, ?ClientInterface $client)
    {
        if (\is_string($request)) {
            $request = \Kemel91\HtmlParser\Factory\RequestFactory::make($request);
        }
        if (!$client) {
            $client = \Kemel91\HtmlParser\Factory\ClientFactory::make();
        }
        $this->request = $request;
        $this->client = $client;
    }

    /**
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function parse(): HtmlParser
    {
        $response = $this->client->sendRequest($this->request);
        $html = $response->getBody()->getContents();

        return new HtmlParser($html);
    }
}