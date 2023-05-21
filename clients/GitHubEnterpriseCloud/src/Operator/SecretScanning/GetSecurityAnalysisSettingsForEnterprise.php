<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSecurityAnalysisSettingsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/get-security-analysis-settings-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/code_security_and_analysis';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/code_security_and_analysis';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\CodeSecurityAndAnalysis $hydrator)
    {
    }

    /**
     * @return PromiseInterface<EnterpriseSecurityAnalysisSettings>
     **/
    public function call(string $enterprise): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseSecurityAnalysisSettings {
            return $operation->createResponse($response);
        });
    }
}
