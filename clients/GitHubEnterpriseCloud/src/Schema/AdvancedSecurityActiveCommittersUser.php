<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class AdvancedSecurityActiveCommittersUser
{
    public const SCHEMA_JSON = '{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"user_login":"generated_user_login","last_pushed_date":"2021-11-03"}';
    public ?string $user_login;
    public ?string $last_pushed_date;
    public function __construct(string $user_login, string $last_pushed_date)
    {
        $this->user_login = $user_login;
        $this->last_pushed_date = $last_pushed_date;
    }
}
