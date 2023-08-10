<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeletePreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/delete-pre-receive-environment';
    public const OPERATION_MATCH = 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $preReceiveEnvironmentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment($this->responseSchemaValidator, $this->hydrator, $preReceiveEnvironmentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
