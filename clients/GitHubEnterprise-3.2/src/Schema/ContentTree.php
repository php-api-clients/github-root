<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ContentTree
{
    public const SCHEMA_JSON = '{"title":"Content Tree","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"entries":{"type":"array","items":{"required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}}}},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"Content Tree"}';
    public const SCHEMA_TITLE = 'Content Tree';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","size":13,"name":"generated_name","path":"generated_path","sha":"generated_sha","url":"generated_url","git_url":"generated_git_url","html_url":"generated_html_url","download_url":"generated_download_url","entries":[{"type":"generated_type","size":13,"name":"generated_name","path":"generated_path","content":"generated_content","sha":"generated_sha","url":"generated_url","git_url":"generated_git_url","html_url":"generated_html_url","download_url":"generated_download_url","_links":{"git":"generated_git","html":"generated_html","self":"generated_self"}}],"_links":{"git":"generated_git","html":"generated_html","self":"generated_self"}}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\ContentTree\Entries> $entries
     */
    public function __construct(public string $type, public int $size, public string $name, public string $path, public string $sha, public string $url, public ?string $git_url, public ?string $html_url, public ?string $download_url, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ContentTree\Entries::class)] public ?array $entries, public Schema\ContentTree\Entries\Links $_links)
    {
    }
}
