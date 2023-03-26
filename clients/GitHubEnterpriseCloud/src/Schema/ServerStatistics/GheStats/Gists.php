<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Gists
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_gists":13,"private_gists":13,"public_gists":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_gists')] public ?int $totalGists, #[\EventSauce\ObjectHydrator\MapFrom('private_gists')] public ?int $privateGists, #[\EventSauce\ObjectHydrator\MapFrom('public_gists')] public ?int $publicGists)
    {
    }
}
