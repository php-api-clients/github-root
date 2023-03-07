<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ScimError
{
    public const SCHEMA_JSON = '{"title":"Scim Error","type":"object","properties":{"message":{"type":["string","null"]},"documentation_url":{"type":["string","null"]},"detail":{"type":["string","null"]},"status":{"type":"integer"},"scimType":{"type":["string","null"]},"schemas":{"type":"array","items":{"type":"string"}}},"description":"Scim Error"}';
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","documentation_url":"generated_documentation_url","detail":"generated_detail","status":13,"scimType":"generated_scimType","schemas":["generated_schemas"]}';
    /**
     * @param ?array<string> $schemas
     */
    public function __construct(public ?string $message, public ?string $documentation_url, public ?string $detail, public ?int $status, public ?string $scimType, public ?array $schemas)
    {
    }
}
