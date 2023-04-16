<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class AnnouncementMessage
{
    public const SCHEMA_JSON         = '{"type":"string","description":"The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see \\"[Basic writing and formatting syntax](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/github\\/writing-on-github\\/getting-started-with-writing-and-formatting-on-github\\/basic-writing-and-formatting-syntax).\\"","examples":["Very **important** announcement about _nothing_."]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/enterprise-server@3.1/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
