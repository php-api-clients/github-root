<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class AdvancedSecurityActiveCommitters
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"total_advanced_security_committers":{"type":"integer","examples":[25]},"total_count":{"type":"integer","examples":[2]},"repositories":{"type":"array","items":{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalAdvancedSecurityCommitters":25,"totalCount":2,"repositories":[{"name":"octocat\\/Hello-World","advancedSecurityCommitters":25,"advancedSecurityCommittersBreakdown":[{"userLogin":"generated_user_login_null","lastPushedDate":"2021-11-03"}]}]}';
    /**
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository> $repositories
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_advanced_security_committers')] public ?int $totalAdvancedSecurityCommitters, #[\EventSauce\ObjectHydrator\MapFrom('total_count')] public ?int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\AdvancedSecurityActiveCommittersRepository::class)] public array $repositories)
    {
    }
}
