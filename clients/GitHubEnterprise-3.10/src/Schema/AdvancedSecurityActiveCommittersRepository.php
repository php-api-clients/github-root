<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AdvancedSecurityActiveCommittersRepository
{
    public const SCHEMA_JSON         = '{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"octocat\\/Hello-World","advanced_security_committers":25,"advanced_security_committers_breakdown":[{"user_login":"generated","last_pushed_date":"2021-11-03"},{"user_login":"generated","last_pushed_date":"2021-11-03"}]}';

    public function __construct(public string $name, #[MapFrom('advanced_security_committers')]
    public int $advancedSecurityCommitters, #[MapFrom('advanced_security_committers_breakdown')]
    public array $advancedSecurityCommittersBreakdown,)
    {
    }
}
