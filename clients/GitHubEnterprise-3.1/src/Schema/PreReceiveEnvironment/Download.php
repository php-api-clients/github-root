<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Download
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated","state":"generated","downloaded_at":"generated","message":"generated"}';

    public function __construct(public ?string $url, public ?string $state, #[MapFrom('downloaded_at')] public ?string $downloadedAt, public ?string $message)
    {
    }
}
