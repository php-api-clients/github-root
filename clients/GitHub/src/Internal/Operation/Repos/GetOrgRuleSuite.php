<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\RuleSuite;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetOrgRuleSuite
{
    public const OPERATION_ID    = 'repos/get-org-rule-suite';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/rule-suites/{rule_suite_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the rule suite result.
    To get this ID, you can use [GET /repos/{owner}/{repo}/rulesets/rule-suites](https://docs.github.com/rest/repos/rule-suites#list-repository-rule-suites)
    for repositories and [GET /orgs/{org}/rulesets/rule-suites](https://docs.github.com/rest/orgs/rule-suites#list-organization-rule-suites)
    for organizations. **/
    private int $ruleSuiteId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RuleSuiteId $hydrator, string $org, int $ruleSuiteId)
    {
        $this->org                     = $org;
        $this->ruleSuiteId             = $ruleSuiteId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/rulesets/rule-suites/{rule_suite_id}'))->expand(['org' => $this->org, 'rule_suite_id' => $this->ruleSuiteId]));
    }

    public function createResponse(ResponseInterface $response): RuleSuite
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(RuleSuite::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(RuleSuite::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(500, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
