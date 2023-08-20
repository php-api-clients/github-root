<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteScimGroupFromEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/delete-scim-group-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /scim/v2/Groups/{scim_group_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/scim/v2/Groups/{scim_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Groups\ScimGroupId $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $scimGroupId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise($this->responseSchemaValidator, $this->hydrator, $scimGroupId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
