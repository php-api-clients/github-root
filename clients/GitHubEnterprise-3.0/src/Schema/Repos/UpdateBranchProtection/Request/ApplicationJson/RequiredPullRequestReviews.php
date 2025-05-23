<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RequiredPullRequestReviews
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "dismissal_restrictions": {
            "type": "object",
            "properties": {
                "users": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The list of user `login`s with dismissal access"
                },
                "teams": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The list of team `slug`s with dismissal access"
                }
            },
            "description": "Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."
        },
        "dismiss_stale_reviews": {
            "type": "boolean",
            "description": "Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."
        },
        "require_code_owner_reviews": {
            "type": "boolean",
            "description": "Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."
        },
        "required_approving_review_count": {
            "type": "integer",
            "description": "Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6."
        }
    },
    "description": "Require at least one approving review on a pull request, before merging. Set to `null` to disable."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Require at least one approving review on a pull request, before merging. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "dismissal_restrictions": {
        "users": [
            "generated",
            "generated"
        ],
        "teams": [
            "generated",
            "generated"
        ]
    },
    "dismiss_stale_reviews": false,
    "require_code_owner_reviews": false,
    "required_approving_review_count": 31
}';

    /**
     * dismissalRestrictions: Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * dismissStaleReviews: Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     * requireCodeOwnerReviews: Blocks merging pull requests until [code owners](https://docs.github.com/articles/about-code-owners/) review them.
     * requiredApprovingReviewCount: Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6.
     */
    public function __construct(#[MapFrom('dismissal_restrictions')]
    public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\DismissalRestrictions|null $dismissalRestrictions, #[MapFrom('dismiss_stale_reviews')]
    public bool|null $dismissStaleReviews, #[MapFrom('require_code_owner_reviews')]
    public bool|null $requireCodeOwnerReviews, #[MapFrom('required_approving_review_count')]
    public int|null $requiredApprovingReviewCount,)
    {
    }
}
