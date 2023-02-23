<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\MinimalRepository;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class License
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key","name":"generated_name","spdx_id":"generated_spdx_id","url":"generated_url","node_id":"generated_node_id"}';
    public ?string $key;
    public ?string $name;
    public ?string $spdx_id;
    public ?string $url;
    public ?string $node_id;
    public function __construct(string $key, string $name, string $spdx_id, string $url, string $node_id)
    {
        $this->key = $key;
        $this->name = $name;
        $this->spdx_id = $spdx_id;
        $this->url = $url;
        $this->node_id = $node_id;
    }
}
