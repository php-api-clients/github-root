<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ScriptRepository
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"full_name":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"full_name":"generated_full_name_null","url":"generated_url_null","html_url":"generated_html_url_null"}';

    public function __construct(public ?int $id, #[MapFrom('full_name')] public ?string $fullName, public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
