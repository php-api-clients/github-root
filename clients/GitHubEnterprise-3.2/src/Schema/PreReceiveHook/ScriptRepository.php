<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ScriptRepository
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"full_name":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"full_name":"generated_full_name_null","url":"generated_url_null","html_url":"generated_html_url_null"}';
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public ?string $fullName, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
