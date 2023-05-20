<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

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

final class GetPreReceiveHookForOrg
{
    public const OPERATION_ID    = 'enterprise-admin/get-pre-receive-hook-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the pre-receive hook. **/
    private int $preReceiveHookId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId $hydrator, string $org, int $preReceiveHookId)
    {
        $this->org                     = $org;
        $this->preReceiveHookId        = $preReceiveHookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{pre_receive_hook_id}'], [$this->org, $this->preReceiveHookId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\OrgPreReceiveHook
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\OrgPreReceiveHook::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\OrgPreReceiveHook::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
