<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Issues;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\Label;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetLabel
{
    public const OPERATION_ID    = 'issues/get-label';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/labels/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/labels/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Labels\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Label>
     **/
    public function call(string $owner, string $repo, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Issues\GetLabel($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Label {
            return $operation->createResponse($response);
        });
    }
}
