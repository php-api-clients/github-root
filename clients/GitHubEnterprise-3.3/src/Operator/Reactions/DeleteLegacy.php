<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Reactions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteLegacy
{
    public const OPERATION_ID    = 'reactions/delete-legacy';
    public const OPERATION_MATCH = 'DELETE /reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/reactions/{reaction_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Reactions\ReactionId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $reactionId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Reactions\DeleteLegacy($this->responseSchemaValidator, $this->hydrator, $reactionId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
