<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PublicKeyFull
{
    public const SCHEMA_JSON         = '{"required":["id","key","url","title","verified","created_at","read_only","last_used","user_id","repository_id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"user_id":{"type":["integer","null"]},"repository_id":{"type":["integer","null"]},"url":{"type":"string"},"title":{"type":"string"},"read_only":{"type":"boolean"},"verified":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"key":"generated","user_id":7,"repository_id":13,"url":"generated","title":"generated","read_only":false,"verified":false,"created_at":"1970-01-01T00:00:00+00:00"}';

    public function __construct(public int $id, public string $key, #[MapFrom('user_id')] public ?int $userId, #[MapFrom('repository_id')] public ?int $repositoryId, public string $url, public string $title, #[MapFrom('read_only')] public bool $readOnly, public bool $verified, #[MapFrom('created_at')] public string $createdAt)
    {
    }
}
