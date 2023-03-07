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
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"full_name":"generated_full_name","url":"generated_url","html_url":"generated_html_url"}';
    public function __construct(public ?int $id, public ?string $full_name, public ?string $url, public ?string $html_url)
    {
    }
}
