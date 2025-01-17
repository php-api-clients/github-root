<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListHostedRunnersForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListHostedRunnersForEnterprise
{
    public const OPERATION_ID    = 'actions/list-hosted-runners-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/hosted-runners';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\HostedRunners $hydrator)
    {
    }

    public function call(string $enterprise, int $perPage = 30, int $page = 1): Ok
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions\ListHostedRunnersForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
