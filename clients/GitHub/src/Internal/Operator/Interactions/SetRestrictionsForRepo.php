<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Interactions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetRestrictionsForRepo
{
    public const OPERATION_ID    = 'interactions/set-restrictions-for-repo';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, array $params): InteractionLimitResponse|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Interactions\SetRestrictionsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): InteractionLimitResponse|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
