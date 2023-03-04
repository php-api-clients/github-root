<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PublicKeyFull
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only","last_used","user_id","repository_id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"user_id":{"type":["integer","null"]},"repository_id":{"type":["integer","null"]},"url":{"type":"string"},"title":{"type":"string"},"read_only":{"type":"boolean"},"verified":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"key":"generated_key","user_id":13,"repository_id":13,"url":"generated_url","title":"generated_title","read_only":false,"verified":false,"created_at":"generated_created_at"}';
    public ?int $id;
    public ?string $key;
    public ?int $user_id;
    public ?int $repository_id;
    public ?string $url;
    public ?string $title;
    public ?bool $read_only;
    public ?bool $verified;
    public ?string $created_at;
    public function __construct(int $id, string $key, int $user_id, int $repository_id, string $url, string $title, bool $read_only, bool $verified, string $created_at)
    {
        $this->id = $id;
        $this->key = $key;
        $this->user_id = $user_id;
        $this->repository_id = $repository_id;
        $this->url = $url;
        $this->title = $title;
        $this->read_only = $read_only;
        $this->verified = $verified;
        $this->created_at = $created_at;
    }
}
