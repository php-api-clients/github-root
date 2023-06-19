<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Git;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\GitTree;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetTree
{
    public const OPERATION_ID    = 'git/get-tree';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/trees/{tree_sha}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/trees/{tree_sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha $hydrator)
    {
    }

    /** @return PromiseInterface<GitTree> **/
    public function call(string $owner, string $repo, string $treeSha, string $recursive): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Git\GetTree($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $treeSha, $recursive);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitTree {
            return $operation->createResponse($response);
        });
    }
}
