<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAlertsForRepo
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts $hydrator)
    {
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function call(string $owner, string $repo, string $state, string $secretType, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $perPage = 30): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\SecretScanning\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $state, $secretType, $resolution, $sort, $direction, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
