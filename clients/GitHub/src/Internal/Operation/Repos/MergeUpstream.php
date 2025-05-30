<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class MergeUpstream
{
    public const OPERATION_ID    = 'repos/merge-upstream';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/merge-upstream';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\MergeUpstream\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/merge-upstream'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\MergedUpstream|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MergedUpstream::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\MergedUpstream::class, $body);
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
