<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateBranchProtection\Request\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RequiredPullRequestReviews
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/articles\\/about-code-owners\\/) review them."},"required_approving_review_count":{"type":"integer","description":"Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."},"bypass_pull_request_allowances":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}},"description":"Require at least one approving review on a pull request, before merging. Set to `null` to disable."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Require at least one approving review on a pull request, before merging. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{"dismissal_restrictions":{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]},"dismiss_stale_reviews":false,"require_code_owner_reviews":false,"required_approving_review_count":13,"bypass_pull_request_allowances":{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]}}';
    /**
     * dismissal_restrictions: Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * dismiss_stale_reviews: Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     * require_code_owner_reviews: Blocks merging pull requests until [code owners](https://docs.github.com/enterprise-server@3.7/articles/about-code-owners/) review them.
     * required_approving_review_count: Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     * bypass_pull_request_allowances: Allow specific users, teams, or apps to bypass pull request requirements.
     */
    public function __construct(public ?Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\DismissalRestrictions $dismissal_restrictions, public ?bool $dismiss_stale_reviews, public ?bool $require_code_owner_reviews, public ?int $required_approving_review_count, public ?Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\BypassPullRequestAllowances $bypass_pull_request_allowances)
    {
    }
}
