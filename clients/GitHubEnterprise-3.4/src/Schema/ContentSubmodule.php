<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ContentSubmodule
{
    public const SCHEMA_JSON = '{"title":"Submodule Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","submodule_git_url"],"type":"object","properties":{"type":{"enum":["submodule"],"type":"string"},"submodule_git_url":{"type":"string","format":"uri"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"An object describing a submodule"}';
    public const SCHEMA_TITLE = 'Submodule Content';
    public const SCHEMA_DESCRIPTION = 'An object describing a submodule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","submodule_git_url":"generated_submodule_git_url","size":13,"name":"generated_name","path":"generated_path","sha":"generated_sha","url":"generated_url","git_url":"generated_git_url","html_url":"generated_html_url","download_url":"generated_download_url","_links":{"git":"generated_git","html":"generated_html","self":"generated_self"}}';
    public ?string $type;
    public ?string $submodule_git_url;
    public ?int $size;
    public ?string $name;
    public ?string $path;
    public ?string $sha;
    public ?string $url;
    public ?string $git_url;
    public ?string $html_url;
    public ?string $download_url;
    public ?Schema\ContentTree\Entries\Links $_links;
    public function __construct(string $type, string $submodule_git_url, int $size, string $name, string $path, string $sha, string $url, string $git_url, string $html_url, string $download_url, Schema\ContentTree\Entries\Links $_links)
    {
        $this->type = $type;
        $this->submodule_git_url = $submodule_git_url;
        $this->size = $size;
        $this->name = $name;
        $this->path = $path;
        $this->sha = $sha;
        $this->url = $url;
        $this->git_url = $git_url;
        $this->html_url = $html_url;
        $this->download_url = $download_url;
        $this->_links = $_links;
    }
}
