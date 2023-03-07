<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class SshSigningKey
{
    public const SCHEMA_JSON = '{"title":"SSH Signing Key","required":["key","id","title","created_at"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"}},"description":"A public SSH key used to sign Git commits"}';
    public const SCHEMA_TITLE = 'SSH Signing Key';
    public const SCHEMA_DESCRIPTION = 'A public SSH key used to sign Git commits';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key","id":13,"title":"generated_title","created_at":"generated_created_at"}';
    public function __construct(public ?string $key, public ?int $id, public ?string $title, public ?string $created_at)
    {
    }
}
