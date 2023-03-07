<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Orgs\ConvertMemberToOutsideCollaborator\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"async":false}';
    /**
     * async: When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    public function __construct(public ?bool $async)
    {
    }
}
