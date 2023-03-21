<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Members
{
    public const SCHEMA_JSON = '{"required":["value","$ref"],"type":"object","properties":{"value":{"type":"string","description":"The local unique identifier for the member","examples":["23a35c27-23d3-4c03-b4c5-6443c09e7173"]},"$ref":{"type":"string"},"display":{"type":"string","description":"The display name associated with the member","examples":["Monalisa Octocat"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"23a35c27-23d3-4c03-b4c5-6443c09e7173","ref":"generated_ref_null","display":"Monalisa Octocat"}';
    /**
     * value: The local unique identifier for the member
     * display: The display name associated with the member
     */
    public function __construct(public string $value, public string $ref, public ?string $display)
    {
    }
}
