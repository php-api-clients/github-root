<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\FileCommit\Content;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":"generated_self","git":"generated_git","html":"generated_html"}';
    public ?string $self;
    public ?string $git;
    public ?string $html;
    public function __construct(string $self, string $git, string $html)
    {
        $this->self = $self;
        $this->git = $git;
        $this->html = $html;
    }
}
