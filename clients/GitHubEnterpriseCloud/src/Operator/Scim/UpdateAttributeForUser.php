<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateAttributeForUser
{
    public const OPERATION_ID    = 'scim/update-attribute-for-user';
    public const OPERATION_MATCH = 'PATCH /scim/v2/organizations/{org}/Users/{scim_user_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/scim/v2/organizations/{org}/Users/{scim_user_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $scimUserId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim\UpdateAttributeForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $scimUserId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
