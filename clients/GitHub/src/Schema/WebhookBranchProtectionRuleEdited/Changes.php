<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited;

use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorsOnly;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AuthorizedDismissalActorsOnly;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockAllowsForkSync;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\LockBranchEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\PullRequestReviewsEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecks;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequiredStatusChecksEnforcementLevel;
use ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\RequireLastPushApproval;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited\Changes
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'If the action was `edited`, the changes to the rule.';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(#[MapFrom('admin_enforced')]
    public AdminEnforced|null $adminEnforced, #[MapFrom('authorized_actor_names')]
    public AuthorizedActorNames|null $authorizedActorNames, #[MapFrom('authorized_actors_only')]
    public AuthorizedActorsOnly|null $authorizedActorsOnly, #[MapFrom('authorized_dismissal_actors_only')]
    public AuthorizedDismissalActorsOnly|null $authorizedDismissalActorsOnly, #[MapFrom('linear_history_requirement_enforcement_level')]
    public LinearHistoryRequirementEnforcementLevel|null $linearHistoryRequirementEnforcementLevel, #[MapFrom('lock_branch_enforcement_level')]
    public LockBranchEnforcementLevel|null $lockBranchEnforcementLevel, #[MapFrom('lock_allows_fork_sync')]
    public LockAllowsForkSync|null $lockAllowsForkSync, #[MapFrom('pull_request_reviews_enforcement_level')]
    public PullRequestReviewsEnforcementLevel|null $pullRequestReviewsEnforcementLevel, #[MapFrom('require_last_push_approval')]
    public RequireLastPushApproval|null $requireLastPushApproval, #[MapFrom('required_status_checks')]
    public RequiredStatusChecks|null $requiredStatusChecks, #[MapFrom('required_status_checks_enforcement_level')]
    public RequiredStatusChecksEnforcementLevel|null $requiredStatusChecksEnforcementLevel,)
    {
    }
}
