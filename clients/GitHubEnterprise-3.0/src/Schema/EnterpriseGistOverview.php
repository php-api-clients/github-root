<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseGistOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Gist Stats","required":["total_gists","private_gists","public_gists"],"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Gist Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_gists":13,"private_gists":13,"public_gists":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_gists')] public int $totalGists, #[\EventSauce\ObjectHydrator\MapFrom('private_gists')] public int $privateGists, #[\EventSauce\ObjectHydrator\MapFrom('public_gists')] public int $publicGists)
    {
    }
}
