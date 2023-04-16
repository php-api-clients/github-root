<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListExternalIdpGroupsForOrg
{
    public const OPERATION_ID    = 'teams/list-external-idp-groups-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-groups';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/external-groups';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Page token**/
    private int $page;
    /**Limits the list to groups containing the text in the group name**/
    private string $displayName;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $hydrator, string $org, int $page, string $displayName, int $perPage = 30)
    {
        $this->org                     = $org;
        $this->page                    = $page;
        $this->displayName             = $displayName;
        $this->perPage                 = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{page}', '{display_name}', '{per_page}'], [$this->org, $this->page, $this->displayName, $this->perPage], self::PATH . '?page={page}&display_name={display_name}&per_page={per_page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ExternalGroups
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ExternalGroups::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\ExternalGroups::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
