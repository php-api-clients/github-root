<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Branches implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\ShortBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ShortBranch\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($payload),
                'ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch(array $payload): \ApiClients\Client\GitHub\Schema\ShortBranch
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['commit'] ?? null;
    
                if ($value === null) {
                    $properties['commit'] = null;
                    goto after_commit;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'commit';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['commit'] = $value;
    
                after_commit:

                $value = $payload['protected'] ?? null;
    
                if ($value === null) {
                    $properties['protected'] = null;
                    goto after_protected;
                }

                $properties['protected'] = $value;
    
                after_protected:

                $value = $payload['protection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection';
                    goto after_protection;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'protection';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['protection'] = $value;
    
                after_protection:

                $value = $payload['protection_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protection_url';
                    goto after_protection_url;
                }

                $properties['protection_url'] = $value;
    
                after_protection_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ShortBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ShortBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
        {
            $properties = []; 
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
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\ShortBranch\Commit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ShortBranch\Commit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ShortBranch\Commit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ShortBranch\Commit', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection
        {
            $properties = []; 
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
                    $properties['required_status_checks'] = null;
                    goto after_required_status_checks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_status_checks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_status_checks'] = $value;
    
                after_required_status_checks:

                $value = $payload['enforce_admins'] ?? null;
    
                if ($value === null) {
                    $properties['enforce_admins'] = null;
                    goto after_enforce_admins;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enforce_admins';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enforce_admins'] = $value;
    
                after_enforce_admins:

                $value = $payload['required_pull_request_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['required_pull_request_reviews'] = null;
                    goto after_required_pull_request_reviews;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_pull_request_reviews';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_pull_request_reviews'] = $value;
    
                after_required_pull_request_reviews:

                $value = $payload['restrictions'] ?? null;
    
                if ($value === null) {
                    $properties['restrictions'] = null;
                    goto after_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['restrictions'] = $value;
    
                after_restrictions:

                $value = $payload['required_linear_history'] ?? null;
    
                if ($value === null) {
                    $properties['required_linear_history'] = null;
                    goto after_required_linear_history;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_linear_history';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_linear_history'] = $value;
    
                after_required_linear_history:

                $value = $payload['allow_force_pushes'] ?? null;
    
                if ($value === null) {
                    $properties['allow_force_pushes'] = null;
                    goto after_allow_force_pushes;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_force_pushes';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_force_pushes'] = $value;
    
                after_allow_force_pushes:

                $value = $payload['allow_deletions'] ?? null;
    
                if ($value === null) {
                    $properties['allow_deletions'] = null;
                    goto after_allow_deletions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_deletions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_deletions'] = $value;
    
                after_allow_deletions:

                $value = $payload['block_creations'] ?? null;
    
                if ($value === null) {
                    $properties['block_creations'] = null;
                    goto after_block_creations;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'block_creations';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['block_creations'] = $value;
    
                after_block_creations:

                $value = $payload['required_conversation_resolution'] ?? null;
    
                if ($value === null) {
                    $properties['required_conversation_resolution'] = null;
                    goto after_required_conversation_resolution;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_conversation_resolution';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_conversation_resolution'] = $value;
    
                after_required_conversation_resolution:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['protection_url'] ?? null;
    
                if ($value === null) {
                    $properties['protection_url'] = null;
                    goto after_protection_url;
                }

                $properties['protection_url'] = $value;
    
                after_protection_url:

                $value = $payload['required_signatures'] ?? null;
    
                if ($value === null) {
                    $properties['required_signatures'] = null;
                    goto after_required_signatures;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_signatures';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

                $value = $payload['lock_branch'] ?? null;
    
                if ($value === null) {
                    $properties['lock_branch'] = null;
                    goto after_lock_branch;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'lock_branch';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['lock_branch'] = $value;
    
                after_lock_branch:

                $value = $payload['allow_fork_syncing'] ?? null;
    
                if ($value === null) {
                    $properties['allow_fork_syncing'] = null;
                    goto after_allow_fork_syncing;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_fork_syncing';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_fork_syncing'] = $value;
    
                after_allow_fork_syncing:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['enforcement_level'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforcement_level';
                    goto after_enforcement_level;
                }

                $properties['enforcement_level'] = $value;
    
                after_enforcement_level:

                $value = $payload['contexts'] ?? null;
    
                if ($value === null) {
                    $properties['contexts'] = null;
                    goto after_contexts;
                }

                $properties['contexts'] = $value;
    
                after_contexts:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $properties['checks'] = null;
                    goto after_checks;
                }

                static $checksCaster1;
    
                if ($checksCaster1 === null) {
                    $checksCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks',
));
                }
    
                $value = $checksCaster1->cast($value, $this);

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['contexts_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contexts_url';
                    goto after_contexts_url;
                }

                $properties['contexts_url'] = $value;
    
                after_contexts_url:

                $value = $payload['strict'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'strict';
                    goto after_strict;
                }

                $properties['strict'] = $value;
    
                after_strict:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced
        {
            $properties = []; 
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['dismissal_restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissal_restrictions';
                    goto after_dismissal_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissal_restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissal_restrictions'] = $value;
    
                after_dismissal_restrictions:

                $value = $payload['bypass_pull_request_allowances'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'bypass_pull_request_allowances';
                    goto after_bypass_pull_request_allowances;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'bypass_pull_request_allowances';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['bypass_pull_request_allowances'] = $value;
    
                after_bypass_pull_request_allowances:

                $value = $payload['dismiss_stale_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['dismiss_stale_reviews'] = null;
                    goto after_dismiss_stale_reviews;
                }

                $properties['dismiss_stale_reviews'] = $value;
    
                after_dismiss_stale_reviews:

                $value = $payload['require_code_owner_reviews'] ?? null;
    
                if ($value === null) {
                    $properties['require_code_owner_reviews'] = null;
                    goto after_require_code_owner_reviews;
                }

                $properties['require_code_owner_reviews'] = $value;
    
                after_require_code_owner_reviews:

                $value = $payload['required_approving_review_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_approving_review_count';
                    goto after_required_approving_review_count;
                }

                $properties['required_approving_review_count'] = $value;
    
                after_required_approving_review_count:

                $value = $payload['require_last_push_approval'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'require_last_push_approval';
                    goto after_require_last_push_approval;
                }

                $properties['require_last_push_approval'] = $value;
    
                after_require_last_push_approval:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchRestrictionPolicy(array $payload): \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['users_url'] ?? null;
    
                if ($value === null) {
                    $properties['users_url'] = null;
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

                $value = $payload['apps_url'] ?? null;
    
                if ($value === null) {
                    $properties['apps_url'] = null;
                    goto after_apps_url;
                }

                $properties['apps_url'] = $value;
    
                after_apps_url:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Owner',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Teams',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy\\Apps',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures
        {
            $properties = []; 
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️LockBranch(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection⚡️AllowForkSyncing(array $payload): \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['enabled'] ?? null;
    
                if ($value === null) {
                    $properties['enabled'] = null;
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

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
                    $properties['users_url'] = null;
                    goto after_users_url;
                }

                $properties['users_url'] = $value;
    
                after_users_url:

                $value = $payload['teams_url'] ?? null;
    
                if ($value === null) {
                    $properties['teams_url'] = null;
                    goto after_teams_url;
                }

                $properties['teams_url'] = $value;
    
                after_teams_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️BypassPullRequestAllowances(array $payload): \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\SimpleUser',
));
                }
    
                $value = $usersCaster1->cast($value, $this);

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Team',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $properties['apps'] = null;
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Integration',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\ShortBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ShortBranch);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $commit = $object->commit;

        if ($commit === null) {
            goto after_commit;
        }
        $commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ShortBranch⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $protected = $object->protected;

        if ($protected === null) {
            goto after_protected;
        }
        after_protected:        $result['protected'] = $protected;

        
        $protection = $object->protection;
        $protection = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BranchProtection($protection);
        after_protection:        $result['protection'] = $protection;

        
        $protection_url = $object->protection_url;
        after_protection_url:        $result['protection_url'] = $protection_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
