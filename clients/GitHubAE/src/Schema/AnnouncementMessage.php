<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class AnnouncementMessage
{
    public const SCHEMA_JSON = '{"type":["string","null"],"description":"The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see \\"[Basic writing and formatting syntax](https:\\/\\/docs.github.com\\/github-ae@latest\\/github\\/writing-on-github\\/getting-started-with-writing-and-formatting-on-github\\/basic-writing-and-formatting-syntax).\\"","examples":["Very **important** announcement about _something_."]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/github-ae@latest/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
