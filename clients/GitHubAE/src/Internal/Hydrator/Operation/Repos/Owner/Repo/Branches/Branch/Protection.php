<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch;

use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\BranchProtection;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowDeletions;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowForcePushes;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\BlockCreations;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredConversationResolution;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredLinearHistory;
use ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredSignatures;
use ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranch;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranch\EnforceAdmins;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck;
use ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHubAE\Schema\ValidationErrorSimple;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Protection implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHubAE\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowForcePushes' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowDeletions' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\BlockCreations' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch($payload),
                'ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\EnforceAdmins' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($payload),
                'ApiClients\Client\GitHubAE\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection(array $payload): BranchProtection
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['required_status_checks'] ?? null;

            if ($value === null) {
                $properties['requiredStatusChecks'] = null;
                goto after_requiredStatusChecks;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredStatusChecks';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredStatusChecks'] = $value;

            after_requiredStatusChecks:

            $value = $payload['enforce_admins'] ?? null;

            if ($value === null) {
                $properties['enforceAdmins'] = null;
                goto after_enforceAdmins;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enforceAdmins';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enforceAdmins'] = $value;

            after_enforceAdmins:

            $value = $payload['required_pull_request_reviews'] ?? null;

            if ($value === null) {
                $properties['requiredPullRequestReviews'] = null;
                goto after_requiredPullRequestReviews;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredPullRequestReviews';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredPullRequestReviews'] = $value;

            after_requiredPullRequestReviews:

            $value = $payload['restrictions'] ?? null;

            if ($value === null) {
                $properties['restrictions'] = null;
                goto after_restrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'restrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['restrictions'] = $value;

            after_restrictions:

            $value = $payload['required_linear_history'] ?? null;

            if ($value === null) {
                $properties['requiredLinearHistory'] = null;
                goto after_requiredLinearHistory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredLinearHistory';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredLinearHistory'] = $value;

            after_requiredLinearHistory:

            $value = $payload['allow_force_pushes'] ?? null;

            if ($value === null) {
                $properties['allowForcePushes'] = null;
                goto after_allowForcePushes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowForcePushes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForcePushes'] = $value;

            after_allowForcePushes:

            $value = $payload['allow_deletions'] ?? null;

            if ($value === null) {
                $properties['allowDeletions'] = null;
                goto after_allowDeletions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowDeletions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowDeletions'] = $value;

            after_allowDeletions:

            $value = $payload['block_creations'] ?? null;

            if ($value === null) {
                $properties['blockCreations'] = null;
                goto after_blockCreations;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'blockCreations';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['blockCreations'] = $value;

            after_blockCreations:

            $value = $payload['required_conversation_resolution'] ?? null;

            if ($value === null) {
                $properties['requiredConversationResolution'] = null;
                goto after_requiredConversationResolution;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredConversationResolution';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredConversationResolution'] = $value;

            after_requiredConversationResolution:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['protection_url'] ?? null;

            if ($value === null) {
                $properties['protectionUrl'] = null;
                goto after_protectionUrl;
            }

            $properties['protectionUrl'] = $value;

            after_protectionUrl:

            $value = $payload['required_signatures'] ?? null;

            if ($value === null) {
                $properties['requiredSignatures'] = null;
                goto after_requiredSignatures;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredSignatures';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredSignatures'] = $value;

            after_requiredSignatures:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BranchProtection::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BranchProtection(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): ProtectedBranchRequiredStatusCheck
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enforcement_level'] ?? null;

            if ($value === null) {
                $properties['enforcementLevel'] = null;
                goto after_enforcementLevel;
            }

            $properties['enforcementLevel'] = $value;

            after_enforcementLevel:

            $value = $payload['contexts'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contexts';
                goto after_contexts;
            }

            $properties['contexts'] = $value;

            after_contexts:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'checks';
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['contexts_url'] ?? null;

            if ($value === null) {
                $properties['contextsUrl'] = null;
                goto after_contextsUrl;
            }

            $properties['contextsUrl'] = $value;

            after_contextsUrl:

            $value = $payload['strict'] ?? null;

            if ($value === null) {
                $properties['strict'] = null;
                goto after_strict;
            }

            $properties['strict'] = $value;

            after_strict:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchRequiredStatusCheck(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): ProtectedBranchAdminEnforced
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchAdminEnforced(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): ProtectedBranchPullRequestReview
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['dismissal_restrictions'] ?? null;

            if ($value === null) {
                $properties['dismissalRestrictions'] = null;
                goto after_dismissalRestrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissalRestrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissalRestrictions'] = $value;

            after_dismissalRestrictions:

            $value = $payload['bypass_pull_request_allowances'] ?? null;

            if ($value === null) {
                $properties['bypassPullRequestAllowances'] = null;
                goto after_bypassPullRequestAllowances;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'bypassPullRequestAllowances';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['bypassPullRequestAllowances'] = $value;

            after_bypassPullRequestAllowances:

            $value = $payload['dismiss_stale_reviews'] ?? null;

            if ($value === null) {
                $missingFields[] = 'dismiss_stale_reviews';
                goto after_dismissStaleReviews;
            }

            $properties['dismissStaleReviews'] = $value;

            after_dismissStaleReviews:

            $value = $payload['require_code_owner_reviews'] ?? null;

            if ($value === null) {
                $missingFields[] = 'require_code_owner_reviews';
                goto after_requireCodeOwnerReviews;
            }

            $properties['requireCodeOwnerReviews'] = $value;

            after_requireCodeOwnerReviews:

            $value = $payload['required_approving_review_count'] ?? null;

            if ($value === null) {
                $properties['requiredApprovingReviewCount'] = null;
                goto after_requiredApprovingReviewCount;
            }

            $properties['requiredApprovingReviewCount'] = $value;

            after_requiredApprovingReviewCount:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranchPullRequestReview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): DismissalRestrictions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['users'] ?? null;

            if ($value === null) {
                $properties['users'] = null;
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $properties['teams'] = null;
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['users_url'] ?? null;

            if ($value === null) {
                $properties['usersUrl'] = null;
                goto after_usersUrl;
            }

            $properties['usersUrl'] = $value;

            after_usersUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $properties['teamsUrl'] = null;
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DismissalRestrictions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): BypassPullRequestAllowances
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['users'] ?? null;

            if ($value === null) {
                $properties['users'] = null;
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $properties['teams'] = null;
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BypassPullRequestAllowances(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy(array $payload): BranchRestrictionPolicy
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['users_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users_url';
                goto after_usersUrl;
            }

            $properties['usersUrl'] = $value;

            after_usersUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['apps_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'apps_url';
                goto after_appsUrl;
            }

            $properties['appsUrl'] = $value;

            after_appsUrl:

            $value = $payload['users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users';
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams';
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $missingFields[] = 'apps';
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BranchRestrictionPolicy(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): RequiredLinearHistory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredLinearHistory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(array $payload): AllowForcePushes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AllowForcePushes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions(array $payload): AllowDeletions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AllowDeletions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations(array $payload): BlockCreations
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BlockCreations(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(array $payload): RequiredConversationResolution
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredConversationResolution(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): RequiredSignatures
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredSignatures(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch(array $payload): ProtectedBranch
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['required_status_checks'] ?? null;

            if ($value === null) {
                $properties['requiredStatusChecks'] = null;
                goto after_requiredStatusChecks;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredStatusChecks';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredStatusChecks'] = $value;

            after_requiredStatusChecks:

            $value = $payload['required_pull_request_reviews'] ?? null;

            if ($value === null) {
                $properties['requiredPullRequestReviews'] = null;
                goto after_requiredPullRequestReviews;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredPullRequestReviews';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredPullRequestReviews'] = $value;

            after_requiredPullRequestReviews:

            $value = $payload['required_signatures'] ?? null;

            if ($value === null) {
                $properties['requiredSignatures'] = null;
                goto after_requiredSignatures;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredSignatures';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredSignatures'] = $value;

            after_requiredSignatures:

            $value = $payload['enforce_admins'] ?? null;

            if ($value === null) {
                $properties['enforceAdmins'] = null;
                goto after_enforceAdmins;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enforceAdmins';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enforceAdmins'] = $value;

            after_enforceAdmins:

            $value = $payload['required_linear_history'] ?? null;

            if ($value === null) {
                $properties['requiredLinearHistory'] = null;
                goto after_requiredLinearHistory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredLinearHistory';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredLinearHistory'] = $value;

            after_requiredLinearHistory:

            $value = $payload['allow_force_pushes'] ?? null;

            if ($value === null) {
                $properties['allowForcePushes'] = null;
                goto after_allowForcePushes;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowForcePushes';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowForcePushes'] = $value;

            after_allowForcePushes:

            $value = $payload['allow_deletions'] ?? null;

            if ($value === null) {
                $properties['allowDeletions'] = null;
                goto after_allowDeletions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'allowDeletions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['allowDeletions'] = $value;

            after_allowDeletions:

            $value = $payload['restrictions'] ?? null;

            if ($value === null) {
                $properties['restrictions'] = null;
                goto after_restrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'restrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['restrictions'] = $value;

            after_restrictions:

            $value = $payload['required_conversation_resolution'] ?? null;

            if ($value === null) {
                $properties['requiredConversationResolution'] = null;
                goto after_requiredConversationResolution;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requiredConversationResolution';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requiredConversationResolution'] = $value;

            after_requiredConversationResolution:

            $value = $payload['block_creations'] ?? null;

            if ($value === null) {
                $properties['blockCreations'] = null;
                goto after_blockCreations;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'blockCreations';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['blockCreations'] = $value;

            after_blockCreations:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ProtectedBranch::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ProtectedBranch(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy(array $payload): StatusCheckPolicy
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['strict'] ?? null;

            if ($value === null) {
                $missingFields[] = 'strict';
                goto after_strict;
            }

            $properties['strict'] = $value;

            after_strict:

            $value = $payload['contexts'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contexts';
                goto after_contexts;
            }

            $properties['contexts'] = $value;

            after_contexts:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'checks';
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['contexts_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contexts_url';
                goto after_contextsUrl;
            }

            $properties['contextsUrl'] = $value;

            after_contextsUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(StatusCheckPolicy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new StatusCheckPolicy(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(array $payload): RequiredPullRequestReviews
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['dismiss_stale_reviews'] ?? null;

            if ($value === null) {
                $properties['dismissStaleReviews'] = null;
                goto after_dismissStaleReviews;
            }

            $properties['dismissStaleReviews'] = $value;

            after_dismissStaleReviews:

            $value = $payload['require_code_owner_reviews'] ?? null;

            if ($value === null) {
                $properties['requireCodeOwnerReviews'] = null;
                goto after_requireCodeOwnerReviews;
            }

            $properties['requireCodeOwnerReviews'] = $value;

            after_requireCodeOwnerReviews:

            $value = $payload['required_approving_review_count'] ?? null;

            if ($value === null) {
                $properties['requiredApprovingReviewCount'] = null;
                goto after_requiredApprovingReviewCount;
            }

            $properties['requiredApprovingReviewCount'] = $value;

            after_requiredApprovingReviewCount:

            $value = $payload['dismissal_restrictions'] ?? null;

            if ($value === null) {
                $properties['dismissalRestrictions'] = null;
                goto after_dismissalRestrictions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissalRestrictions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissalRestrictions'] = $value;

            after_dismissalRestrictions:

            $value = $payload['bypass_pull_request_allowances'] ?? null;

            if ($value === null) {
                $properties['bypassPullRequestAllowances'] = null;
                goto after_bypassPullRequestAllowances;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'bypassPullRequestAllowances';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['bypassPullRequestAllowances'] = $value;

            after_bypassPullRequestAllowances:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RequiredPullRequestReviews::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RequiredPullRequestReviews(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['users_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users_url';
                goto after_usersUrl;
            }

            $properties['usersUrl'] = $value;

            after_usersUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users';
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams';
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'users';
                goto after_users;
            }

            $properties['users'] = $value;

            after_users:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams';
                goto after_teams;
            }

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['apps'] ?? null;

            if ($value === null) {
                $properties['apps'] = null;
                goto after_apps;
            }

            $properties['apps'] = $value;

            after_apps:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(array $payload): EnforceAdmins
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnforceAdmins::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnforceAdmins(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations(array $payload): \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationErrorSimple(array $payload): ValidationErrorSimple
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationErrorSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($object),
                'ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowForcePushes' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\AllowDeletions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\BlockCreations' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredConversationResolution' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($object),
                'ApiClients\Client\GitHubAE\Schema\BranchProtection\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($object),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch($object),
                'ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\EnforceAdmins' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($object),
                'ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($object),
                'ApiClients\Client\GitHubAE\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationErrorSimple($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection(mixed $object): mixed
    {
        assert($object instanceof BranchProtection);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $requiredStatusChecks = $object->requiredStatusChecks;

        if ($requiredStatusChecks === null) {
            goto after_requiredStatusChecks;
        }

        $requiredStatusChecks                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }

        $enforceAdmins                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }

        $requiredPullRequestReviews                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }

        $restrictions                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }

        $requiredLinearHistory                                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }

        $allowForcePushes                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }

        $allowDeletions                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }

        $blockCreations                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }

        $requiredConversationResolution                                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution($requiredConversationResolution);
        after_requiredConversationResolution:        $result['required_conversation_resolution'] = $requiredConversationResolution;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $protectionUrl = $object->protectionUrl;

        if ($protectionUrl === null) {
            goto after_protectionUrl;
        }

        after_protectionUrl:        $result['protection_url'] = $protectionUrl;

        $requiredSignatures = $object->requiredSignatures;

        if ($requiredSignatures === null) {
            goto after_requiredSignatures;
        }

        $requiredSignatures                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchRequiredStatusCheck);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $enforcementLevel = $object->enforcementLevel;

        if ($enforcementLevel === null) {
            goto after_enforcementLevel;
        }

        after_enforcementLevel:        $result['enforcement_level'] = $enforcementLevel;

        $contexts = $object->contexts;
        static $contextsSerializer0;

        if ($contextsSerializer0 === null) {
            $contextsSerializer0 = new SerializeArrayItems(...[]);
        }

        $contexts                                  = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        $checks = $object->checks;
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new SerializeArrayItems(...[]);
        }

        $checks                                = $checksSerializer0->serialize($checks, $this);
        after_checks:        $result['checks'] = $checks;

        $contextsUrl = $object->contextsUrl;

        if ($contextsUrl === null) {
            goto after_contextsUrl;
        }

        after_contextsUrl:        $result['contexts_url'] = $contextsUrl;

        $strict = $object->strict;

        if ($strict === null) {
            goto after_strict;
        }

        after_strict:        $result['strict'] = $strict;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchAdminEnforced(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchAdminEnforced);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranchPullRequestReview);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $dismissalRestrictions = $object->dismissalRestrictions;

        if ($dismissalRestrictions === null) {
            goto after_dismissalRestrictions;
        }

        $dismissalRestrictions                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }

        $bypassPullRequestAllowances                                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
        after_bypassPullRequestAllowances:        $result['bypass_pull_request_allowances'] = $bypassPullRequestAllowances;

        $dismissStaleReviews                                               = $object->dismissStaleReviews;
        after_dismissStaleReviews:        $result['dismiss_stale_reviews'] = $dismissStaleReviews;

        $requireCodeOwnerReviews                                                    = $object->requireCodeOwnerReviews;
        after_requireCodeOwnerReviews:        $result['require_code_owner_reviews'] = $requireCodeOwnerReviews;

        $requiredApprovingReviewCount = $object->requiredApprovingReviewCount;

        if ($requiredApprovingReviewCount === null) {
            goto after_requiredApprovingReviewCount;
        }

        after_requiredApprovingReviewCount:        $result['required_approving_review_count'] = $requiredApprovingReviewCount;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(mixed $object): mixed
    {
        assert($object instanceof DismissalRestrictions);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }

        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }

        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $usersUrl = $object->usersUrl;

        if ($usersUrl === null) {
            goto after_usersUrl;
        }

        after_usersUrl:        $result['users_url'] = $usersUrl;

        $teamsUrl = $object->teamsUrl;

        if ($teamsUrl === null) {
            goto after_teamsUrl;
        }

        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        assert($object instanceof BypassPullRequestAllowances);
        $result = [];

        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }

        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }

        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy(mixed $object): mixed
    {
        assert($object instanceof BranchRestrictionPolicy);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $usersUrl                                   = $object->usersUrl;
        after_usersUrl:        $result['users_url'] = $usersUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $appsUrl                                  = $object->appsUrl;
        after_appsUrl:        $result['apps_url'] = $appsUrl;

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;
        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(mixed $object): mixed
    {
        assert($object instanceof RequiredLinearHistory);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowForcePushes(mixed $object): mixed
    {
        assert($object instanceof AllowForcePushes);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️AllowDeletions(mixed $object): mixed
    {
        assert($object instanceof AllowDeletions);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️BlockCreations(mixed $object): mixed
    {
        assert($object instanceof BlockCreations);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredConversationResolution(mixed $object): mixed
    {
        assert($object instanceof RequiredConversationResolution);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(mixed $object): mixed
    {
        assert($object instanceof RequiredSignatures);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch(mixed $object): mixed
    {
        assert($object instanceof ProtectedBranch);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $requiredStatusChecks = $object->requiredStatusChecks;

        if ($requiredStatusChecks === null) {
            goto after_requiredStatusChecks;
        }

        $requiredStatusChecks                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy($requiredStatusChecks);
        after_requiredStatusChecks:        $result['required_status_checks'] = $requiredStatusChecks;

        $requiredPullRequestReviews = $object->requiredPullRequestReviews;

        if ($requiredPullRequestReviews === null) {
            goto after_requiredPullRequestReviews;
        }

        $requiredPullRequestReviews                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($requiredPullRequestReviews);
        after_requiredPullRequestReviews:        $result['required_pull_request_reviews'] = $requiredPullRequestReviews;

        $requiredSignatures = $object->requiredSignatures;

        if ($requiredSignatures === null) {
            goto after_requiredSignatures;
        }

        $requiredSignatures                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures($requiredSignatures);
        after_requiredSignatures:        $result['required_signatures'] = $requiredSignatures;

        $enforceAdmins = $object->enforceAdmins;

        if ($enforceAdmins === null) {
            goto after_enforceAdmins;
        }

        $enforceAdmins                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($enforceAdmins);
        after_enforceAdmins:        $result['enforce_admins'] = $enforceAdmins;

        $requiredLinearHistory = $object->requiredLinearHistory;

        if ($requiredLinearHistory === null) {
            goto after_requiredLinearHistory;
        }

        $requiredLinearHistory                                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($requiredLinearHistory);
        after_requiredLinearHistory:        $result['required_linear_history'] = $requiredLinearHistory;

        $allowForcePushes = $object->allowForcePushes;

        if ($allowForcePushes === null) {
            goto after_allowForcePushes;
        }

        $allowForcePushes                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes($allowForcePushes);
        after_allowForcePushes:        $result['allow_force_pushes'] = $allowForcePushes;

        $allowDeletions = $object->allowDeletions;

        if ($allowDeletions === null) {
            goto after_allowDeletions;
        }

        $allowDeletions                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions($allowDeletions);
        after_allowDeletions:        $result['allow_deletions'] = $allowDeletions;

        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }

        $restrictions                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        $requiredConversationResolution = $object->requiredConversationResolution;

        if ($requiredConversationResolution === null) {
            goto after_requiredConversationResolution;
        }

        $requiredConversationResolution                                                          = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($requiredConversationResolution);
        after_requiredConversationResolution:        $result['required_conversation_resolution'] = $requiredConversationResolution;

        $blockCreations = $object->blockCreations;

        if ($blockCreations === null) {
            goto after_blockCreations;
        }

        $blockCreations                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations($blockCreations);
        after_blockCreations:        $result['block_creations'] = $blockCreations;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️StatusCheckPolicy(mixed $object): mixed
    {
        assert($object instanceof StatusCheckPolicy);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $strict                                = $object->strict;
        after_strict:        $result['strict'] = $strict;

        $contexts = $object->contexts;
        static $contextsSerializer0;

        if ($contextsSerializer0 === null) {
            $contextsSerializer0 = new SerializeArrayItems(...[]);
        }

        $contexts                                  = $contextsSerializer0->serialize($contexts, $this);
        after_contexts:        $result['contexts'] = $contexts;

        $checks = $object->checks;
        static $checksSerializer0;

        if ($checksSerializer0 === null) {
            $checksSerializer0 = new SerializeArrayItems(...[]);
        }

        $checks                                = $checksSerializer0->serialize($checks, $this);
        after_checks:        $result['checks'] = $checks;

        $contextsUrl                                      = $object->contextsUrl;
        after_contextsUrl:        $result['contexts_url'] = $contextsUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(mixed $object): mixed
    {
        assert($object instanceof RequiredPullRequestReviews);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $dismissStaleReviews = $object->dismissStaleReviews;

        if ($dismissStaleReviews === null) {
            goto after_dismissStaleReviews;
        }

        after_dismissStaleReviews:        $result['dismiss_stale_reviews'] = $dismissStaleReviews;

        $requireCodeOwnerReviews = $object->requireCodeOwnerReviews;

        if ($requireCodeOwnerReviews === null) {
            goto after_requireCodeOwnerReviews;
        }

        after_requireCodeOwnerReviews:        $result['require_code_owner_reviews'] = $requireCodeOwnerReviews;

        $requiredApprovingReviewCount = $object->requiredApprovingReviewCount;

        if ($requiredApprovingReviewCount === null) {
            goto after_requiredApprovingReviewCount;
        }

        after_requiredApprovingReviewCount:        $result['required_approving_review_count'] = $requiredApprovingReviewCount;

        $dismissalRestrictions = $object->dismissalRestrictions;

        if ($dismissalRestrictions === null) {
            goto after_dismissalRestrictions;
        }

        $dismissalRestrictions                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($dismissalRestrictions);
        after_dismissalRestrictions:        $result['dismissal_restrictions'] = $dismissalRestrictions;

        $bypassPullRequestAllowances = $object->bypassPullRequestAllowances;

        if ($bypassPullRequestAllowances === null) {
            goto after_bypassPullRequestAllowances;
        }

        $bypassPullRequestAllowances                                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances($bypassPullRequestAllowances);
        after_bypassPullRequestAllowances:        $result['bypass_pull_request_allowances'] = $bypassPullRequestAllowances;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $usersUrl                                   = $object->usersUrl;
        after_usersUrl:        $result['users_url'] = $usersUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️BypassPullRequestAllowances(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances);
        $result = [];

        $users = $object->users;
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new SerializeArrayItems(...[]);
        }

        $users                               = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $apps = $object->apps;

        if ($apps === null) {
            goto after_apps;
        }

        static $appsSerializer0;

        if ($appsSerializer0 === null) {
            $appsSerializer0 = new SerializeArrayItems(...[]);
        }

        $apps                              = $appsSerializer0->serialize($apps, $this);
        after_apps:        $result['apps'] = $apps;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredSignatures(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredSignatures);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(mixed $object): mixed
    {
        assert($object instanceof EnforceAdmins);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredLinearHistory);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowForcePushes(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowForcePushes);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️AllowDeletions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\AllowDeletions);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\RequiredConversationResolution);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ProtectedBranch⚡️BlockCreations(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ProtectedBranch\BlockCreations);
        $result = [];

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        assert($object instanceof ValidationErrorSimple);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
