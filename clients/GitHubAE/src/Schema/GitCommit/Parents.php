<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\GitCommit;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"generated_url","html_url":"generated_html_url"}';
    /**
     * sha: SHA for the commit
     */
    public function __construct(public string $sha, public string $url, public string $html_url)
    {
    }
}
