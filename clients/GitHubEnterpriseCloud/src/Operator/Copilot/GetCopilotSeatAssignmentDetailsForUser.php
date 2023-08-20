<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Copilot;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotSeatDetails;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCopilotSeatAssignmentDetailsForUser
{
    public const OPERATION_ID    = 'copilot/get-copilot-seat-assignment-details-for-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members/{username}/copilot';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/members/{username}/copilot';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Members\Username\Copilot $hydrator)
    {
    }

    /** @return (Schema\CopilotSeatDetails | array{code: int}) */
    public function call(string $org, string $username): CopilotSeatDetails|array
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Copilot\GetCopilotSeatAssignmentDetailsForUser($this->responseSchemaValidator, $this->hydrator, $org, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CopilotSeatDetails|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
