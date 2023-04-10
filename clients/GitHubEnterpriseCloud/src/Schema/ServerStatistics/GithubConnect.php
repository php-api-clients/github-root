<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class GithubConnect
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"features_enabled":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"features_enabled":["generated_features_enabled_null"]}';
    /**
     * @param ?array<string> $featuresEnabled
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('features_enabled')] public ?array $featuresEnabled)
    {
    }
}
