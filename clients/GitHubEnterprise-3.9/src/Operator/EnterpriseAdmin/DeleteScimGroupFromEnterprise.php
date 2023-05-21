<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteScimGroupFromEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/delete-scim-group-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /scim/v2/Groups/{scim_group_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/scim/v2/Groups/{scim_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Groups\ScimGroupId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $scimGroupId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise($this->responseSchemaValidator, $this->hydrator, $scimGroupId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
