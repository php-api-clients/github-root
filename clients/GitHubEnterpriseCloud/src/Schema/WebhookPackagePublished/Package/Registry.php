<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookPackagePublished\Package;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Registry
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"https:\\/\\/example.com\\/","name":"generated_name_null","type":"generated_type_null","url":"https:\\/\\/example.com\\/","vendor":"generated_vendor_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('about_url')] public string $aboutUrl, public string $name, public string $type, public string $url, public string $vendor)
    {
    }
}
