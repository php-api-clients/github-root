<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Meta;

use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;

final class GetOctocat
{
    public const OPERATION_ID    = 'meta/get-octocat';
    public const OPERATION_MATCH = 'GET /octocat';
    /**The words to show in Octocat's speech bubble **/
    private string $s;

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/octocat{?s}'))->expand(['s' => $this->s]));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
