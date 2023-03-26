<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Issues\Update\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":["string","null"],"description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Login for the user that this issue should be assigned to. **This field is deprecated.**"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue. Either `open` or `closed`."},"state_reason":{"enum":["completed","not_planned","reopened",null],"type":["string","null"],"description":"The reason for the current state","examples":["not_planned"]},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._"}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._"},"assignees":{"type":"array","items":{"type":"string"},"description":"Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","body":"generated_body_null","assignee":"generated_assignee_null","state":"open","state_reason":"not_planned","milestone":"generated_milestone_null","labels":["generated_labels_null"],"assignees":["generated_assignees_null"]}';
    /**
     * title: The title of the issue.
     * body: The contents of the issue.
     * assignee: Login for the user that this issue should be assigned to. **This field is deprecated.**
     * state: State of the issue. Either `open` or `closed`.
     * stateReason: The reason for the current state
     * labels: Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @param ?array<string> $labels
     * assignees: Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @param ?array<string> $assignees
     */
    public function __construct(public ?string $title, public ?string $body, public ?string $assignee, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('state_reason')] public ?string $stateReason, public ?string $milestone, public ?array $labels, public ?array $assignees)
    {
    }
}
