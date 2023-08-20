<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateAttributeForEnterpriseGroup
{
    public const OPERATION_ID    = 'enterprise-admin/update-attribute-for-enterprise-group';
    public const OPERATION_MATCH = 'PATCH /scim/v2/Groups/{scim_group_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/scim/v2/Groups/{scim_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Groups\ScimGroupId $hydrator)
    {
    }

    /** @return (Schema\GroupResponse | array{code: int}) */
    public function call(string $scimGroupId, array $params): GroupResponse|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $scimGroupId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GroupResponse|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
