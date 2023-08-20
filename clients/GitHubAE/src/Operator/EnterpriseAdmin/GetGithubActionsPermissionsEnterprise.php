<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubActionsPermissionsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/get-github-actions-permissions-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/permissions';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/permissions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise): ActionsEnterprisePermissions|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsEnterprisePermissions|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
