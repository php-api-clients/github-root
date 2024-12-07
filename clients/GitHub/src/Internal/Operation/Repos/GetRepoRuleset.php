<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
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

final class GetRepoRuleset
{
    public const OPERATION_ID    = 'repos/get-repo-ruleset';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the ruleset. **/
    private int $rulesetId;
    /**Include rulesets configured at higher levels that apply to this repository **/
    private bool $includesParents;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RulesetId $hydrator, string $owner, string $repo, int $rulesetId, bool $includesParents = true)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->rulesetId               = $rulesetId;
        $this->includesParents         = $includesParents;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/rulesets/{ruleset_id}{?includes_parents}'))->expand(['includes_parents' => $this->includesParents, 'owner' => $this->owner, 'repo' => $this->repo, 'ruleset_id' => $this->rulesetId]));
    }

    public function createResponse(ResponseInterface $response): RepositoryRuleset
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(RepositoryRuleset::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(RepositoryRuleset::class, $body);
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
