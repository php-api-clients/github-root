<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AdvancedSecurityActiveCommitters
{
    public const SCHEMA_JSON         = '{"required":["repositories"],"type":"object","properties":{"total_advanced_security_committers":{"type":"integer","examples":[25]},"total_count":{"type":"integer","examples":[2]},"repositories":{"type":"array","items":{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_advanced_security_committers":25,"total_count":2,"repositories":[{"name":"octocat\\/Hello-World","advanced_security_committers":25,"advanced_security_committers_breakdown":[{"user_login":"generated","last_pushed_date":"2021-11-03"},{"user_login":"generated","last_pushed_date":"2021-11-03"}]},{"name":"octocat\\/Hello-World","advanced_security_committers":25,"advanced_security_committers_breakdown":[{"user_login":"generated","last_pushed_date":"2021-11-03"},{"user_login":"generated","last_pushed_date":"2021-11-03"}]}]}';

    public function __construct(#[MapFrom('total_advanced_security_committers')]
    public int|null $totalAdvancedSecurityCommitters, #[MapFrom('total_count')]
    public int|null $totalCount, public array $repositories,)
    {
    }
}
