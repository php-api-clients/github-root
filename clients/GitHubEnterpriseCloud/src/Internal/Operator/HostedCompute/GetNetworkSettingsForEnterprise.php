<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\HostedCompute;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkSettings;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetNetworkSettingsForEnterprise
{
    public const OPERATION_ID    = 'hosted-compute/get-network-settings-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/network-settings/{network_settings_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\NetworkSettings\NetworkSettingsId $hydrator)
    {
    }

    public function call(string $enterprise, string $networkSettingsId): NetworkSettings
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\HostedCompute\GetNetworkSettingsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $networkSettingsId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): NetworkSettings {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
