<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespaces\SetRepositoriesForSecretForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids for which a codespace can access the secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/rest\\/reference\\/codespaces#list-selected-repositories-for-a-user-secret), [Add a selected repository to a user secret](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/rest\\/reference\\/codespaces#add-a-selected-repository-to-a-user-secret), and [Remove a selected repository from a user secret](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/rest\\/reference\\/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[13]}';
    /**
     * selectedRepositoryIds: An array of repository ids for which a codespace can access the secret. You can manage the list of selected repositories using the [List selected repositories for a user secret](https://docs.github.com/enterprise-cloud@latest//rest/reference/codespaces#list-selected-repositories-for-a-user-secret), [Add a selected repository to a user secret](https://docs.github.com/enterprise-cloud@latest//rest/reference/codespaces#add-a-selected-repository-to-a-user-secret), and [Remove a selected repository from a user secret](https://docs.github.com/enterprise-cloud@latest//rest/reference/codespaces#remove-a-selected-repository-from-a-user-secret) endpoints.
     * @param array<int> $selectedRepositoryIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
