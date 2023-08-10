<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Gists;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListComments
{
    public const OPERATION_ID    = 'gists/list-comments';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/gists/{gist_id}/comments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Comments $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $gistId, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Gists\ListComments($this->responseSchemaValidator, $this->hydrator, $gistId, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
