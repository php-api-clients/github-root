<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespaces\SetCodespacesBillingUsers\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_usernames"],"type":"object","properties":{"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members whose codespaces be billed to the organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_usernames":["generated_selected_usernames"]}';
    /**
     * The usernames of the organization members whose codespaces be billed to the organization.
     * @var array<string>
     */
    public ?array $selected_usernames;
    public function __construct(array $selected_usernames)
    {
        $this->selected_usernames = $selected_usernames;
    }
}
