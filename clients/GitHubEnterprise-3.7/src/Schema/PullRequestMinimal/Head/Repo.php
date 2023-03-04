<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\PullRequestMinimal\Head;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"url":"generated_url","name":"generated_name"}';
    public ?int $id;
    public ?string $url;
    public ?string $name;
    public function __construct(int $id, string $url, string $name)
    {
        $this->id = $id;
        $this->url = $url;
        $this->name = $name;
    }
}
