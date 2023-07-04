<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServerStatisticsActions
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"number_of_repos_using_actions":{"type":"integer","description":"The total number of repositories in a GHES installation that have Actions enabled"},"percentage_of_repos_using_actions":{"type":"string","description":"The percentage of repositories in a GHES installation that have Actions enabled"}},"description":"Actions metrics that are included in the Server Statistics payload\\/export from GHES"}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Actions metrics that are included in the Server Statistics payload/export from GHES';
    public const SCHEMA_EXAMPLE_DATA = '{"number_of_repos_using_actions":29,"percentage_of_repos_using_actions":"generated"}';

    /**
     * numberOfReposUsingActions: The total number of repositories in a GHES installation that have Actions enabled
     * percentageOfReposUsingActions: The percentage of repositories in a GHES installation that have Actions enabled
     */
    public function __construct(#[MapFrom('number_of_repos_using_actions')]
    public int|null $numberOfReposUsingActions, #[MapFrom('percentage_of_repos_using_actions')]
    public string|null $percentageOfReposUsingActions,)
    {
    }
}
