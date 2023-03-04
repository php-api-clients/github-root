<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Registry
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"about_url":{"type":"string"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"generated_about_url","name":"generated_name","type":"generated_type","url":"generated_url","vendor":"generated_vendor"}';
    public ?string $about_url;
    public ?string $name;
    public ?string $type;
    public ?string $url;
    public ?string $vendor;
    public function __construct(string $about_url, string $name, string $type, string $url, string $vendor)
    {
        $this->about_url = $about_url;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
        $this->vendor = $vendor;
    }
}
