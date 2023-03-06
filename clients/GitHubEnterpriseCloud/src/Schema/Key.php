<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Key
{
    public const SCHEMA_JSON = '{"title":"Key","required":["key","id","url","title","created_at","verified","read_only"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"url":{"type":"string"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"verified":{"type":"boolean"},"read_only":{"type":"boolean"}},"description":"Key"}';
    public const SCHEMA_TITLE = 'Key';
    public const SCHEMA_DESCRIPTION = 'Key';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key","id":13,"url":"generated_url","title":"generated_title","created_at":"generated_created_at","verified":false,"read_only":false}';
    public function __construct(public ?string $key, public ?int $id, public ?string $url, public ?string $title, public ?string $created_at, public ?bool $verified, public ?bool $read_only)
    {
    }
}
