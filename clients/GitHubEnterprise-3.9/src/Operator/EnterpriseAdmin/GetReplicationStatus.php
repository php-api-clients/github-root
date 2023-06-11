<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetReplicationStatus
{
    public const OPERATION_ID    = 'enterprise-admin/get-replication-status';
    public const OPERATION_MATCH = 'GET /manage/v1/replication/status';
    private const METHOD         = 'GET';
    private const PATH           = '/manage/v1/replication/status';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Manage\V1\Replication\Status $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GhesReplicationStatus|array)>
     **/
    public function call(string $uuid, string $clusterRoles): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetReplicationStatus($this->responseSchemaValidator, $this->hydrator, $uuid, $clusterRoles);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GhesReplicationStatus|array {
            return $operation->createResponse($response);
        });
    }
}
