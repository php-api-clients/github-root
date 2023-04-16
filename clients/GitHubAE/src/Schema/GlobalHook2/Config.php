<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\GlobalHook2;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","content_type":"generated_content_type_null","insecure_ssl":"generated_insecure_ssl_null"}';

    public function __construct(public ?string $url, #[MapFrom('content_type')] public ?string $contentType, #[MapFrom('insecure_ssl')] public ?string $insecureSsl)
    {
    }
}
