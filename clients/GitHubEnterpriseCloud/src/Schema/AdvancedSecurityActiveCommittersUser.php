<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AdvancedSecurityActiveCommittersUser
{
    public const SCHEMA_JSON         = '{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"user_login":"generated","last_pushed_date":"2021-11-03"}';

    public function __construct(#[MapFrom('user_login')] public string $userLogin, #[MapFrom('last_pushed_date')] public string $lastPushedDate)
    {
    }
}
