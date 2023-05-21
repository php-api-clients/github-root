<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Checks;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RerequestSuite
{
    public const OPERATION_ID    = 'checks/rerequest-suite';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest $hydrator)
    {
    }

    /**
     * @return PromiseInterface<NotFound>
     **/
    public function call(string $owner, string $repo, int $checkSuiteId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Checks\RerequestSuite($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $checkSuiteId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): NotFound {
            return $operation->createResponse($response);
        });
    }
}
