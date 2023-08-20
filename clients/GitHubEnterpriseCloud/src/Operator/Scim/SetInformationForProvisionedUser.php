<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetInformationForProvisionedUser
{
    public const OPERATION_ID    = 'scim/set-information-for-provisioned-user';
    public const OPERATION_MATCH = 'PUT /scim/v2/organizations/{org}/Users/{scim_user_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/scim/v2/organizations/{org}/Users/{scim_user_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId $hydrator)
    {
    }

    /** @return (Schema\ScimUser | array{code: int}) */
    public function call(string $org, string $scimUserId, array $params): ScimUser|array
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\SetInformationForProvisionedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $scimUserId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ScimUser|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
