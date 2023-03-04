<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ContentTree\Entries;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"git":"generated_git","html":"generated_html","self":"generated_self"}';
    public ?string $git;
    public ?string $html;
    public ?string $self;
    public function __construct(string $git, string $html, string $self)
    {
        $this->git = $git;
        $this->html = $html;
        $this->self = $self;
    }
}
