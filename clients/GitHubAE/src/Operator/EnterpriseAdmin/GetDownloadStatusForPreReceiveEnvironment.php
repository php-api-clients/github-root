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

final readonly class GetDownloadStatusForPreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/get-download-status-for-pre-receive-environment';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PreReceiveEnvironmentDownloadStatus>
     **/
    public function call(int $preReceiveEnvironmentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->responseSchemaValidator, $this->hydrator, $preReceiveEnvironmentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
}
