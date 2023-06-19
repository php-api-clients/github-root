<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class StartPreReceiveEnvironmentDownloadStreaming
{
    public const OPERATION_ID    = 'enterprise-admin/start-pre-receive-environment-download';
    public const OPERATION_MATCH = 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $hydrator)
    {
    }

    /** @return PromiseInterface<PreReceiveEnvironmentDownloadStatus> **/
    public function call(int $preReceiveEnvironmentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->responseSchemaValidator, $this->hydrator, $this->browser, $preReceiveEnvironmentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
}
