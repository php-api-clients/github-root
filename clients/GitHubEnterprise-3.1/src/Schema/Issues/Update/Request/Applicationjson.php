<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Issues\Update\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":["string","null"],"description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Login for the user that this issue should be assigned to. **This field is deprecated.**"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue. Either `open` or `closed`."},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._"}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._"},"assignees":{"type":"array","items":{"type":"string"},"description":"Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":13,"body":"generated_body","assignee":"generated_assignee","state":"generated_state","milestone":13,"labels":[{"id":13,"name":"generated_name","description":"generated_description","color":"generated_color"}],"assignees":["generated_assignees"]}';
    /**
     * The title of the issue.
     */
    public ?int $title;
    /**
     * The contents of the issue.
     */
    public ?string $body;
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     */
    public ?string $assignee;
    /**
     * State of the issue. Either `open` or `closed`.
     */
    public ?string $state;
    public ?int $milestone;
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @var array<Schema\Issues\Create\Request\Applicationjson\Labels>
     */
    public ?array $labels;
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @var array<string>
     */
    public ?array $assignees;
    public function __construct(int $title, string $body, string $assignee, string $state, int $milestone, array $labels, array $assignees)
    {
        $this->title = $title;
        $this->body = $body;
        $this->assignee = $assignee;
        $this->state = $state;
        $this->milestone = $milestone;
        $this->labels = $labels;
        $this->assignees = $assignees;
    }
}
