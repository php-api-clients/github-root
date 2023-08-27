<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Reactions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteLegacy
{
    public const OPERATION_ID    = 'reactions/delete-legacy';
    public const OPERATION_MATCH = 'DELETE /reactions/{reaction_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Reactions\ReactionId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(int $reactionId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Reactions\DeleteLegacy($this->responseSchemaValidator, $this->hydrator, $reactionId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
