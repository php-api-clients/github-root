<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\HostedCompute;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateNetworkConfigurationForOrg
{
    public const OPERATION_ID    = 'hosted-compute/update-network-configuration-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/settings/network-configurations/{network_configuration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Settings\NetworkConfigurations\NetworkConfigurationId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $networkConfigurationId, array $params): NetworkConfiguration
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\HostedCompute\UpdateNetworkConfigurationForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $networkConfigurationId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): NetworkConfiguration {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
