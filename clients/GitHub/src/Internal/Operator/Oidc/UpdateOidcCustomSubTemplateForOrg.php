<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Oidc;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateOidcCustomSubTemplateForOrg
{
    public const OPERATION_ID    = 'oidc/update-oidc-custom-sub-template-for-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/oidc/customization/sub';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub $hydrator)
    {
    }

    /** @return */
    public function call(string $org, array $params): EmptyObject
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
