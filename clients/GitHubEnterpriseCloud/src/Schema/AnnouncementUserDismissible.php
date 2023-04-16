<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class AnnouncementUserDismissible
{
    public const SCHEMA_JSON         = '{"type":["boolean","null"],"description":"Whether an announcement can be dismissed by the user.","default":false,"examples":[false]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Whether an announcement can be dismissed by the user.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
