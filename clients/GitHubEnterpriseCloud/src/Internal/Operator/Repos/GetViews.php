<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ViewTraffic;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetViews
{
    public const OPERATION_ID    = 'repos/get-views';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/traffic/views';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $per = 'day'): ViewTraffic
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos\GetViews($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ViewTraffic {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
