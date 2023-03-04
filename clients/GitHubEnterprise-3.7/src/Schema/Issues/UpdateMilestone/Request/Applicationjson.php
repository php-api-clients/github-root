<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Issues\UpdateMilestone\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The title of the milestone."},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone. Either `open` or `closed`.","default":"open"},"description":{"type":"string","description":"A description of the milestone."},"due_on":{"type":"string","description":"The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","state":"generated_state","description":"generated_description","due_on":"generated_due_on"}';
    /**
     * The title of the milestone.
     */
    public ?string $title;
    /**
     * The state of the milestone. Either `open` or `closed`.
     */
    public ?string $state;
    /**
     * A description of the milestone.
     */
    public ?string $description;
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public ?string $due_on;
    public function __construct(string $title, string $state, string $description, string $due_on)
    {
        $this->title = $title;
        $this->state = $state;
        $this->description = $description;
        $this->due_on = $due_on;
    }
}
