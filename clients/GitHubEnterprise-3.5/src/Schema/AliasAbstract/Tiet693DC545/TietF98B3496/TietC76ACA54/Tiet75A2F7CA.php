<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet693DC545\TietF98B3496\TietC76ACA54;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet75A2F7CA
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"image_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"default_environment":{"type":"boolean"},"created_at":{"type":"string"},"hooks_count":{"type":"integer"},"download":{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","image_url":"generated","url":"generated","html_url":"generated","default_environment":false,"created_at":"generated","hooks_count":11,"download":{"url":"generated","state":"generated","downloaded_at":"generated","message":"generated"}}';

    public function __construct(public ?int $id, public ?string $name, #[MapFrom('image_url')] public ?string $imageUrl, public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('default_environment')] public ?bool $defaultEnvironment, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('hooks_count')] public ?int $hooksCount, public ?Schema\PreReceiveEnvironment\Download $download)
    {
    }
}
