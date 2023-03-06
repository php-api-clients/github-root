<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class DeployKey
{
    public const SCHEMA_JSON = '{"title":"Deploy Key","required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"url":{"type":"string"},"title":{"type":"string"},"verified":{"type":"boolean"},"created_at":{"type":"string"},"read_only":{"type":"boolean"}},"description":"An SSH key granting access to a single repository."}';
    public const SCHEMA_TITLE = 'Deploy Key';
    public const SCHEMA_DESCRIPTION = 'An SSH key granting access to a single repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"key":"generated_key","url":"generated_url","title":"generated_title","verified":false,"created_at":"generated_created_at","read_only":false}';
    public function __construct(public ?int $id, public ?string $key, public ?string $url, public ?string $title, public ?bool $verified, public ?string $created_at, public ?bool $read_only)
    {
    }
}
