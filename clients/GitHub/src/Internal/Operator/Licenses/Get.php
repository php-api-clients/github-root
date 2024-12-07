<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Licenses;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Licenses\License;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Get
{
    public const OPERATION_ID    = 'licenses/get';
    public const OPERATION_MATCH = 'GET /licenses/{license}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private License $hydrator)
    {
    }

    /** @return */
    public function call(string $license): \ApiClients\Client\GitHub\Schema\License|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Licenses\Get($this->responseSchemaValidator, $this->hydrator, $license);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\License|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
