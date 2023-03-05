<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Repos\CreateOrUpdateEnvironment\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Reviewers
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"id":{"type":"integer","description":"The id of the user or team who can review the deployment","examples":[4532992]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"User","id":4532992}';
    /**
     * The type of reviewer.
     */
    public ?string $type;
    /**
     * The id of the user or team who can review the deployment
     */
    public ?int $id;
    public function __construct(string $type, int $id)
    {
        $this->type = $type;
        $this->id = $id;
    }
}
