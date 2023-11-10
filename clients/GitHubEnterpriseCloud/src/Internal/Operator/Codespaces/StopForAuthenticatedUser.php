<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Codespaces;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class StopForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/stop-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/codespaces/{codespace_name}/stop';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop $hydrator)
    {
    }

    /** @return */
    public function call(string $codespaceName): Codespace
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Codespaces\StopForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $codespaceName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
