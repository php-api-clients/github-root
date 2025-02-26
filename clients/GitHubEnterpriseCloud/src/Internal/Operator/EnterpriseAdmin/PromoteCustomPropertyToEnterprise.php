<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CustomProperty;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class PromoteCustomPropertyToEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/promote-custom-property-to-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/properties/schema/organizations/{org}/{custom_property_name}/promote';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Properties\Schema\Organizations\Org\CustomPropertyName\Promote $hydrator)
    {
    }

    public function call(string $enterprise, string $org, string $customPropertyName): CustomProperty
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin\PromoteCustomPropertyToEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $org, $customPropertyName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CustomProperty {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
