<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Users;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSshSigningKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/get-ssh-signing-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/ssh_signing_keys/{ssh_signing_key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId $hydrator)
    {
    }

    /** @return */
    public function call(int $sshSigningKeyId): SshSigningKey|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Users\GetSshSigningKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $sshSigningKeyId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SshSigningKey|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
