<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetConfigNodes
{
    public const OPERATION_ID    = 'enterprise-admin/get-config-nodes';
    public const OPERATION_MATCH = 'GET /manage/v1/config/nodes';
    private const METHOD         = 'GET';
    private const PATH           = '/manage/v1/config/nodes';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Manage\V1\Config\Nodes $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GhesConfigNodes|array)>
     **/
    public function call(string $uuid, string $clusterRoles): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetConfigNodes($this->responseSchemaValidator, $this->hydrator, $uuid, $clusterRoles);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GhesConfigNodes|array {
            return $operation->createResponse($response);
        });
    }
}
