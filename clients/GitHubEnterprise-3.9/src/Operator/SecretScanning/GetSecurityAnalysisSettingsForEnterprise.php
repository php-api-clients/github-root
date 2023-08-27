<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSecurityAnalysisSettingsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/get-security-analysis-settings-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/code_security_and_analysis';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\CodeSecurityAndAnalysis $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise): EnterpriseSecurityAnalysisSettings|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseSecurityAnalysisSettings|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
