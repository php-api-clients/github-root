<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\ContentDirectory;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\ContentSubmodule;
use ApiClients\Client\GitHub\Schema\ContentSymlink;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Throwable;

use function explode;
use function json_decode;

final class GetContent
{
    public const OPERATION_ID    = 'repos/get-content';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/contents/{path}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**path parameter **/
    private string $path;
    /**The name of the commit/branch/tag. Default: the repository’s default branch. **/
    private string $ref;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Path $hydrator, string $owner, string $repo, string $path, string $ref)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->path                    = $path;
        $this->ref                     = $ref;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/contents/{path}{?ref}'))->expand(['owner' => $this->owner, 'path' => $this->path, 'ref' => $this->ref, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|WithoutBody
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
                        $error = new RuntimeException();
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(ContentDirectory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(ContentDirectory::class, $body);
                        } catch (Throwable $error) {
                            goto items_application_json_two_hundred_aaaaa;
                        }

                        items_application_json_two_hundred_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(ContentFile::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(ContentFile::class, $body);
                        } catch (Throwable $error) {
                            goto items_application_json_two_hundred_aaaab;
                        }

                        items_application_json_two_hundred_aaaab:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(ContentSymlink::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(ContentSymlink::class, $body);
                        } catch (Throwable $error) {
                            goto items_application_json_two_hundred_aaaac;
                        }

                        items_application_json_two_hundred_aaaac:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(ContentSubmodule::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(ContentSubmodule::class, $body);
                        } catch (Throwable $error) {
                            goto items_application_json_two_hundred_aaaad;
                        }

                        items_application_json_two_hundred_aaaad:
                        throw $error;
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Found
             **/
            case 302:
                return new WithoutBody(302, []);
            /**
             * Not modified
             **/

            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
