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
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","image_url":"generated_image_url_null","url":"generated_url_null","html_url":"generated_html_url_null","default_environment":false,"created_at":"generated_created_at_null","hooks_count":13,"download":{"url":"generated_url_null","state":"generated_state_null","downloaded_at":"generated_downloaded_at_null","message":"generated_message_null"}}';
    public function __construct(public ?int $id, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('image_url')] public ?string $imageUrl, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('default_environment')] public ?bool $defaultEnvironment, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('hooks_count')] public ?int $hooksCount, public ?Schema\PreReceiveEnvironment\Download $download)
    {
    }
}
