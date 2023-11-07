<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class StartPreReceiveEnvironmentDownload
{
    public const OPERATION_ID    = 'enterprise-admin/start-pre-receive-environment-download';
    public const OPERATION_MATCH = 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $hydrator)
    {
    }

    public function call(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->responseSchemaValidator, $this->hydrator, $preReceiveEnvironmentId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
