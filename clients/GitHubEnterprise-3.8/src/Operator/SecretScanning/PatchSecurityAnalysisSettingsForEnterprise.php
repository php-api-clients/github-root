<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class PatchSecurityAnalysisSettingsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/patch-security-analysis-settings-for-enterprise';
    public const OPERATION_MATCH = 'PATCH /enterprises/{enterprise}/code_security_and_analysis';
    private const METHOD         = 'PATCH';
    private const PATH           = '/enterprises/{enterprise}/code_security_and_analysis';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\CodeSecurityAndAnalysis $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $enterprise, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
