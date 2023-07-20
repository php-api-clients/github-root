<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Copilot;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotOrganizationDetails;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCopilotOrganizationDetails
{
    public const OPERATION_ID    = 'copilot/get-copilot-organization-details';
    public const OPERATION_MATCH = 'GET /orgs/{org}/copilot/billing';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/copilot/billing';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Copilot\Billing $hydrator)
    {
    }

    /** @return PromiseInterface<CopilotOrganizationDetails> **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Copilot\GetCopilotOrganizationDetails($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CopilotOrganizationDetails {
            return $operation->createResponse($response);
        });
    }
}
