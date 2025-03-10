<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GetHostedRunnersMachineSpecsForOrg\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetHostedRunnersMachineSpecsForOrg
{
    public const OPERATION_ID    = 'actions/get-hosted-runners-machine-specs-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/hosted-runners/machine-sizes';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\HostedRunners\MachineSizes $hydrator)
    {
    }

    /** @return */
    public function call(string $org): Ok
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\GetHostedRunnersMachineSpecsForOrg($this->responseSchemaValidator, $this->hydrator, $org);
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
