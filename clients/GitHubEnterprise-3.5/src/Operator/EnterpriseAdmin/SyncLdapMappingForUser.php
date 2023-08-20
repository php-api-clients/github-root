<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SyncLdapMappingForUser
{
    public const OPERATION_ID    = 'enterprise-admin/sync-ldap-mapping-for-user';
    public const OPERATION_MATCH = 'POST /admin/ldap/users/{username}/sync';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/ldap/users/{username}/sync';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\Ldap\Users\Username\Sync $hydrator)
    {
    }

    /** @return */
    public function call(string $username): Json|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\SyncLdapMappingForUser($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
