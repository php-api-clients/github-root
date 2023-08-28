<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Gists;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Update
{
    public const OPERATION_ID    = 'gists/update';
    public const OPERATION_MATCH = 'PATCH /gists/{gist_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Gists\GistId $hydrator)
    {
    }

    /** @return Schema\GistSimple */
    public function call(string $gistId, array $params): GistSimple|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Gists\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistSimple|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
