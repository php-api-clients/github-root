<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class License
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":13,"evaluation":false,"perpetual":false,"unlimited_seating":false,"support_key":"generated_support_key","ssh_allowed":false,"cluster_support":false,"expire_at":"generated_expire_at"}';
    public ?int $seats;
    public ?bool $evaluation;
    public ?bool $perpetual;
    public ?bool $unlimited_seating;
    public ?string $support_key;
    public ?bool $ssh_allowed;
    public ?bool $cluster_support;
    public ?string $expire_at;
    public function __construct(int $seats, bool $evaluation, bool $perpetual, bool $unlimited_seating, string $support_key, bool $ssh_allowed, bool $cluster_support, string $expire_at)
    {
        $this->seats = $seats;
        $this->evaluation = $evaluation;
        $this->perpetual = $perpetual;
        $this->unlimited_seating = $unlimited_seating;
        $this->support_key = $support_key;
        $this->ssh_allowed = $ssh_allowed;
        $this->cluster_support = $cluster_support;
        $this->expire_at = $expire_at;
    }
}
