<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class PostSecurityProductEnablementForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/post-security-product-enablement-for-enterprise';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/{security_product}/{enablement}';
    private const METHOD         = 'POST';
    private const PATH           = '/enterprises/{enterprise}/{security_product}/{enablement}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\SecurityProduct\Enablement $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $enterprise, string $securityProduct, string $enablement): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $securityProduct, $enablement);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
