<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Migrations;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class StartForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/start-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/migrations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Migrations $hydrator)
    {
    }

    /** @return */
    public function call(array $params): Migration|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Migrations\StartForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Migration|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
