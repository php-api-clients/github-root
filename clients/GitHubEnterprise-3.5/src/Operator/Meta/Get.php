<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Meta;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Get
{
    public const OPERATION_ID    = 'meta/get';
    public const OPERATION_MATCH = 'GET /meta';
    private const METHOD         = 'GET';
    private const PATH           = '/meta';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Meta $hydrator)
    {
    }

    /** @return (Schema\ApiOverview | array{code: int}) */
    public function call(): ApiOverview|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Meta\Get($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ApiOverview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
