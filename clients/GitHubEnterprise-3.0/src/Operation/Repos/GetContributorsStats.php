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

use function explode;
use function json_decode;
use function str_replace;

final class GetContributorsStats
{
    public const OPERATION_ID    = 'repos/get-contributors-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/contributors';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/contributors';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors $hydrator, private string $owner, private string $repo)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
    }

    /** @return Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Accepted
                     **/
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * A header with no content is returned.
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
