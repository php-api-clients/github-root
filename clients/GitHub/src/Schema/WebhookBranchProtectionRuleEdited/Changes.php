<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "admin_enforced": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "boolean",
                        "null"
                    ]
                }
            }
        },
        "authorized_actor_names": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "authorized_actors_only": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "boolean",
                        "null"
                    ]
                }
            }
        },
        "authorized_dismissal_actors_only": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "boolean",
                        "null"
                    ]
                }
            }
        },
        "linear_history_requirement_enforcement_level": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "enum": [
                        "off",
                        "non_admins",
                        "everyone"
                    ],
                    "type": "string"
                }
            }
        },
        "lock_branch_enforcement_level": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "enum": [
                        "off",
                        "non_admins",
                        "everyone"
                    ],
                    "type": "string"
                }
            }
        },
        "lock_allows_fork_sync": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "boolean",
                        "null"
                    ]
                }
            }
        },
        "pull_request_reviews_enforcement_level": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "enum": [
                        "off",
                        "non_admins",
                        "everyone"
                    ],
                    "type": "string"
                }
            }
        },
        "require_last_push_approval": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "boolean",
                        "null"
                    ]
                }
            }
        },
        "required_status_checks": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "required_status_checks_enforcement_level": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "enum": [
                        "off",
                        "non_admins",
                        "everyone"
                    ],
                    "type": "string"
                }
            }
        }
    },
    "description": "If the action was `edited`, the changes to the rule."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    const SCHEMA_EXAMPLE_DATA = '{
    "admin_enforced": {
        "from": false
    },
    "authorized_actor_names": {
        "from": [
            "generated",
            "generated"
        ]
    },
    "authorized_actors_only": {
        "from": false
    },
    "authorized_dismissal_actors_only": {
        "from": false
    },
    "linear_history_requirement_enforcement_level": {
        "from": "off"
    },
    "lock_branch_enforcement_level": {
        "from": "off"
    },
    "lock_allows_fork_sync": {
        "from": false
    },
    "pull_request_reviews_enforcement_level": {
        "from": "off"
    },
    "require_last_push_approval": {
        "from": false
    },
    "required_status_checks": {
        "from": [
            "generated",
            "generated"
        ]
    },
    "required_status_checks_enforcement_level": {
        "from": "off"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('admin_enforced')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $adminEnforced, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actor_names')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames $authorizedActorNames, #[\EventSauce\ObjectHydrator\MapFrom('authorized_actors_only')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorsOnly $authorizedActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('authorized_dismissal_actors_only')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedDismissalActorsOnly $authorizedDismissalActorsOnly, #[\EventSauce\ObjectHydrator\MapFrom('linear_history_requirement_enforcement_level')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel $linearHistoryRequirementEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('lock_branch_enforcement_level')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockBranchEnforcementLevel $lockBranchEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('lock_allows_fork_sync')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockAllowsForkSync $lockAllowsForkSync, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_reviews_enforcement_level')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\PullRequestReviewsEnforcementLevel $pullRequestReviewsEnforcementLevel, #[\EventSauce\ObjectHydrator\MapFrom('require_last_push_approval')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequireLastPushApproval $requireLastPushApproval, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecks $requiredStatusChecks, #[\EventSauce\ObjectHydrator\MapFrom('required_status_checks_enforcement_level')] public ?\ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecksEnforcementLevel $requiredStatusChecksEnforcementLevel)
    {
    }
}
