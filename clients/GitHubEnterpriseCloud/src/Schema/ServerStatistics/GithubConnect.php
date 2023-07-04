<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GithubConnect
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"features_enabled":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"features_enabled":["generated","generated"]}';

    public function __construct(#[MapFrom('features_enabled')]
    public array|null $featuresEnabled,)
    {
    }
}
