<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Pulls\RemoveRequestedReviewers\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":[null],"team_reviewers":[null]}';
    /**
     * An array of user `login`s that will be removed.
     * @var array<string>
     */
    public ?array $reviewers;
    /**
     * An array of team `slug`s that will be removed.
     * @var array<string>
     */
    public array $team_reviewers;
    public function __construct(array $reviewers, array $team_reviewers)
    {
        $this->reviewers = $reviewers;
        $this->team_reviewers = $team_reviewers;
    }
}
