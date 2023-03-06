<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class AdvancedSecurityActiveCommittersRepository
{
    public const SCHEMA_JSON = '{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"octocat\\/Hello-World","advanced_security_committers":25,"advanced_security_committers_breakdown":[{"user_login":"generated_user_login","last_pushed_date":"2021-11-03"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommittersUser> $advanced_security_committers_breakdown
     */
    public function __construct(public ?string $name, public ?int $advanced_security_committers, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\AdvancedSecurityActiveCommittersUser::class)] public ?array $advanced_security_committers_breakdown)
    {
    }
}
