<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAutolink
{
    public const OPERATION_ID    = 'repos/get-autolink';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $autolinkId): Autolink
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\GetAutolink($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $autolinkId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Autolink {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
