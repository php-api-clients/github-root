<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Apps;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateFromManifest
{
    public const OPERATION_ID    = 'apps/create-from-manifest';
    public const OPERATION_MATCH = 'POST /app-manifests/{code}/conversions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\AppManifests\Code\Conversions $hydrator)
    {
    }

    /** @return */
    public function call(string $code, array $params): Integration
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Apps\CreateFromManifest($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $code);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Integration {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
