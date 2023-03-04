<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Content
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","path":"generated_path","sha":"generated_sha","size":13,"url":"generated_url","html_url":"generated_html_url","git_url":"generated_git_url","download_url":"generated_download_url","type":"generated_type","_links":{"self":"generated_self","git":"generated_git","html":"generated_html"}}';
    public ?string $name;
    public ?string $path;
    public ?string $sha;
    public ?int $size;
    public ?string $url;
    public ?string $html_url;
    public ?string $git_url;
    public ?string $download_url;
    public ?string $type;
    public ?Schema\FileCommit\Content\Links $_links;
    public function __construct(string $name, string $path, string $sha, int $size, string $url, string $html_url, string $git_url, string $download_url, string $type, Schema\FileCommit\Content\Links $_links)
    {
        $this->name = $name;
        $this->path = $path;
        $this->sha = $sha;
        $this->size = $size;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->git_url = $git_url;
        $this->download_url = $download_url;
        $this->type = $type;
        $this->_links = $_links;
    }
}
