<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Dependabot\SetSelectedReposForOrgSecret\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https:\\/\\/docs.github.com\\/enterprise-server@3.6\\/rest\\/reference\\/dependabot#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https:\\/\\/docs.github.com\\/enterprise-server@3.6\\/rest\\/reference\\/dependabot#remove-selected-repository-from-an-organization-secret) endpoints."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_repository_ids":[13]}';
    /**
     * selected_repository_ids: An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://docs.github.com/enterprise-server@3.6/rest/reference/dependabot#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://docs.github.com/enterprise-server@3.6/rest/reference/dependabot#remove-selected-repository-from-an-organization-secret) endpoints.
     * @param array<int> $selected_repository_ids
     */
    public function __construct(public array $selected_repository_ids)
    {
    }
}
