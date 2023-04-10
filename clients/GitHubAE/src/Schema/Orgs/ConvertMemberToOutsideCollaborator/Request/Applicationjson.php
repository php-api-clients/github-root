<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Orgs\ConvertMemberToOutsideCollaborator\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
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
