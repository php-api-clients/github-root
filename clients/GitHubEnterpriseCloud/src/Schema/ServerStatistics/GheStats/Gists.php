<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Gists
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_gists":11,"private_gists":13,"public_gists":12}';

    public function __construct(#[MapFrom('total_gists')] public ?int $totalGists, #[MapFrom('private_gists')] public ?int $privateGists, #[MapFrom('public_gists')] public ?int $publicGists)
    {
    }
}
