<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeSecurity;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\AttachEnterpriseConfiguration\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AttachEnterpriseConfiguration
{
    public const OPERATION_ID    = 'code-security/attach-enterprise-configuration';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/code-security/configurations/{configuration_id}/attach';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\CodeSecurity\Configurations\ConfigurationId\Attach $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, int $configurationId, array $params): Json
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeSecurity\AttachEnterpriseConfiguration($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise, $configurationId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
