<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Teams;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteLegacy
{
    public const OPERATION_ID    = 'teams/delete-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId $hydrator)
    {
    }

    /** @return */
    public function call(int $teamId): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Teams\DeleteLegacy($this->responseSchemaValidator, $this->hydrator, $teamId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
