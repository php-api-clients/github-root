<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Pulls\RequestReviewers\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated_reviewers_null"],"team_reviewers":["generated_team_reviewers_null"]}';
    /**
     * reviewers: An array of user `login`s that will be requested.
     * @param ?array<string> $reviewers
     * teamReviewers: An array of team `slug`s that will be requested.
     * @param ?array<string> $teamReviewers
     */
    public function __construct(public ?array $reviewers, #[\EventSauce\ObjectHydrator\MapFrom('team_reviewers')] public ?array $teamReviewers)
    {
    }
}
