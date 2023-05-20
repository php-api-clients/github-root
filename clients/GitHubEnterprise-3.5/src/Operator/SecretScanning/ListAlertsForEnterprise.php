<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAlertsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/secret-scanning/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/secret-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\SecretScanning\ListAlertsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $state, $secretType, $resolution, $before, $after, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
