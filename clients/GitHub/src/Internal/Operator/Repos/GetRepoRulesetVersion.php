<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\RulesetVersion;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRepoRulesetVersion
{
    public const OPERATION_ID    = 'repos/get-repo-ruleset-version';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}/history/{version_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId\History\VersionId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $rulesetId, int $versionId): RulesetVersion
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\GetRepoRulesetVersion($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $rulesetId, $versionId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RulesetVersion {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
