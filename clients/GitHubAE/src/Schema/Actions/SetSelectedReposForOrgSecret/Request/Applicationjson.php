<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Actions\SetSelectedReposForOrgSecret\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/actions\\/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/actions#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[13]}';
    /**
     * selectedRepositoryIds: An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Add selected repository to an organization secret](https://docs.github.com/github-ae@latest/rest/actions/secrets#add-selected-repository-to-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/github-ae@latest/rest/reference/actions#remove-selected-repository-from-an-organization-secret) endpoints.
     * @param array<int> $selectedRepositoryIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
