<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetProvisioningInformationForEnterpriseGroup
{
    public const OPERATION_ID    = 'enterprise-admin/get-provisioning-information-for-enterprise-group';
    public const OPERATION_MATCH = 'GET /scim/v2/Groups/{scim_group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/scim/v2/Groups/{scim_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Groups\ScimGroupId $hydrator)
    {
    }

    /** @return PromiseInterface<(GroupResponse|array)> **/
    public function call(string $scimGroupId, string $excludedAttributes): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup($this->responseSchemaValidator, $this->hydrator, $scimGroupId, $excludedAttributes);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GroupResponse|array {
            return $operation->createResponse($response);
        });
    }
}
