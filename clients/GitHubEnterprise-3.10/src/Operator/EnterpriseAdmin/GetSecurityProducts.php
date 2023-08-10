<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSecurityProducts
{
    public const OPERATION_ID    = 'enterprise-admin/get-security-products';
    public const OPERATION_MATCH = 'GET /enterprise/stats/security-products';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/stats/security-products';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprise\Stats\SecurityProducts $hydrator)
    {
    }

    /** @return PromiseInterface<EnterpriseSecurityProductsOverview> **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetSecurityProducts($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseSecurityProductsOverview {
            return $operation->createResponse($response);
        });
    }
}
