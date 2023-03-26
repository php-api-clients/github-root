<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PublicKeyFull
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only","last_used","user_id","repository_id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"user_id":{"type":["integer","null"]},"repository_id":{"type":["integer","null"]},"url":{"type":"string"},"title":{"type":"string"},"read_only":{"type":"boolean"},"verified":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"key":"generated_key_null","user_id":13,"repository_id":13,"url":"generated_url_null","title":"generated_title_null","read_only":false,"verified":false,"created_at":"1970-01-01T00:00:00+00:00"}';
    public function __construct(public int $id, public string $key, #[\EventSauce\ObjectHydrator\MapFrom('user_id')] public ?int $userId, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public ?int $repositoryId, public string $url, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('read_only')] public bool $readOnly, public bool $verified, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt)
    {
    }
}
