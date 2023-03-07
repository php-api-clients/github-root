<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PreReceiveEnvironment
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"image_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"default_environment":{"type":"boolean"},"created_at":{"type":"string"},"hooks_count":{"type":"integer"},"download":{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","image_url":"generated_image_url","url":"generated_url","html_url":"generated_html_url","default_environment":false,"created_at":"generated_created_at","hooks_count":13,"download":{"url":"generated_url","state":"generated_state","downloaded_at":"generated_downloaded_at","message":"generated_message"}}';
    public function __construct(public ?int $id, public ?string $name, public ?string $image_url, public ?string $url, public ?string $html_url, public ?bool $default_environment, public ?string $created_at, public ?int $hooks_count, public ?Schema\PreReceiveEnvironment\Download $download)
    {
    }
}
