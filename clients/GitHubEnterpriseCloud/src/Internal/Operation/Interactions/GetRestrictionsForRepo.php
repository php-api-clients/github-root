<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Interactions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetRestrictionsForRepo
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/interaction-limits';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/interaction-limits'));
    }

    public function createResponse(ResponseInterface $response): Schema\InteractionLimitResponse|Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One
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
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\InteractionLimitResponse::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\InteractionLimitResponse::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaaa;
                        }

                        items_application_json_two_hundred_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaab;
                        }

                        items_application_json_two_hundred_aaaab:
                        throw $error;
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
