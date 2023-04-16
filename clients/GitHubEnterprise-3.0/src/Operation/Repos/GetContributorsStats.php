<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class GetContributorsStats
{
    public const OPERATION_ID    = 'repos/get-contributors-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/contributors';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/contributors';
    private string $owner;
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
    }

    /**
     * @return Observable<Schema\ContributorActivity>|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
     */
    public function createResponse(ResponseInterface $response): Observable|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * *   `w` - Start of the week, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
                    *   `a` - Number of additions
                    *   `d` - Number of deletions
                    *   `c` - Number of commits
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\ContributorActivity::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ContributorActivity {
                            return $this->hydrator->hydrateObject(Schema\ContributorActivity::class, $body);
                        });
                    /**
                     * Accepted
                    **/

                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
