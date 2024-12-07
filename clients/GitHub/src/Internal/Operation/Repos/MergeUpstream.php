<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Schema\MergedUpstream;
use ApiClients\Client\GitHub\Schema\Repos\MergeUpstream\Request\ApplicationJson;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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
use function json_encode;

final class MergeUpstream
{
    public const OPERATION_ID    = 'repos/merge-upstream';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/merge-upstream';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private \ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream $hydrator, string $owner, string $repo)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/merge-upstream'))->expand(['owner' => $this->owner, 'repo' => $this->repo]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): MergedUpstream|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * The branch has been successfully synced with the upstream repository
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(MergedUpstream::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(MergedUpstream::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * The branch could not be synced because of a merge conflict
             **/
            case 409:
                return new WithoutBody(409, []);
            /**
             * The branch could not be synced for some other reason
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
