<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\IssueType;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateIssueType
{
    public const OPERATION_ID    = 'orgs/update-issue-type';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/issue-types/{issue_type_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\IssueTypes\IssueTypeId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $issueTypeId, array $params): IssueType
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\UpdateIssueType($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $issueTypeId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): IssueType {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
