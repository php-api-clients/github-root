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

final readonly class CreateNetworkConfigurationForOrg
{
    public const OPERATION_ID    = 'hosted-compute/create-network-configuration-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/settings/network-configurations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Settings\NetworkConfigurations $hydrator)
    {
    }

    /** @return */
    public function call(string $org, array $params): NetworkConfiguration
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\HostedCompute\CreateNetworkConfigurationForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
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
