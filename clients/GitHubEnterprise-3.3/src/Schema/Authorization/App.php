<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Authorization;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class App
{
    public const SCHEMA_JSON = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_id":"generated_client_id","name":"generated_name","url":"generated_url"}';
    public ?string $client_id;
    public ?string $name;
    public ?string $url;
    public function __construct(string $client_id, string $name, string $url)
    {
        $this->client_id = $client_id;
        $this->name = $name;
        $this->url = $url;
    }
}
