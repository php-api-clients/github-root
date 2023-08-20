<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteUserFromOrg
{
    public const OPERATION_ID    = 'scim/delete-user-from-org';
    public const OPERATION_MATCH = 'DELETE /scim/v2/organizations/{org}/Users/{scim_user_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/scim/v2/organizations/{org}/Users/{scim_user_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $scimUserId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\DeleteUserFromOrg($this->responseSchemaValidator, $this->hydrator, $org, $scimUserId);
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
