<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency;
use ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function is_int;
use function json_decode;

final class GetCodeFrequencyStats
{
    public const OPERATION_ID    = 'repos/get-code-frequency-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/code_frequency';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private CodeFrequency $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/stats/code_frequency'))->expand(['owner' => $this->owner, 'repo' => $this->repo]));
    }

    /** @return Observable<int>|Json|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|Json|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Returns a weekly aggregate of the number of additions and deletions pushed to a repository.
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(static function (array $body): int {
                            $error = new RuntimeException();
                            if (is_int($body)) {
                                return $body;
                            }

                            throw $error;
                        });
                    /**
                     * Accepted
                     **/

                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Json::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Json::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * A header with no content is returned.
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Repository contains more than 10,000 commits
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
