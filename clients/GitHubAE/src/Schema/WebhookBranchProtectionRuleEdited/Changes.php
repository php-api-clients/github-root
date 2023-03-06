<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookBranchProtectionRuleEdited;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    public const SCHEMA_EXAMPLE_DATA = '{"admin_enforced":{"from":false},"authorized_actor_names":{"from":["generated_from"]},"authorized_actors_only":{"from":false},"authorized_dismissal_actors_only":{"from":false},"linear_history_requirement_enforcement_level":{"from":"generated_from"},"required_status_checks":{"from":["generated_from"]},"required_status_checks_enforcement_level":{"from":"generated_from"}}';
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $admin_enforced;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorized_actor_names;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_actors_only;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_dismissal_actors_only;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $required_status_checks;
    public ?Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $required_status_checks_enforcement_level;
    public function __construct(Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $admin_enforced, Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorized_actor_names, Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_actors_only, Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $authorized_dismissal_actors_only, Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level, Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $required_status_checks, Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $required_status_checks_enforcement_level)
    {
        $this->admin_enforced = $admin_enforced;
        $this->authorized_actor_names = $authorized_actor_names;
        $this->authorized_actors_only = $authorized_actors_only;
        $this->authorized_dismissal_actors_only = $authorized_dismissal_actors_only;
        $this->linear_history_requirement_enforcement_level = $linear_history_requirement_enforcement_level;
        $this->required_status_checks = $required_status_checks;
        $this->required_status_checks_enforcement_level = $required_status_checks_enforcement_level;
    }
}
