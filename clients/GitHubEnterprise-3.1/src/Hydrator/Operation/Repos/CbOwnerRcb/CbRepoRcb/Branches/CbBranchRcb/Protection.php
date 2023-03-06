<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Protection implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ValidationErrorSimple($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchAdminEnforced($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️StatusCheckPolicy($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchAdminEnforced($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BranchProtection::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BasicError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch
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

                $value = $payload['required_status_checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_status_checks';
                    goto after_required_status_checks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_status_checks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️StatusCheckPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_status_checks'] = $value;
    
                after_required_status_checks:

                $value = $payload['required_pull_request_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_pull_request_reviews';
                    goto after_required_pull_request_reviews;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_pull_request_reviews';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_pull_request_reviews'] = $value;
    
                after_required_pull_request_reviews:

                $value = $payload['required_signatures'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_signatures';
                    goto after_required_signatures;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_signatures';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_signatures'] = $value;
    
                after_required_signatures:

                $value = $payload['enforce_admins'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforce_admins';
                    goto after_enforce_admins;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'enforce_admins';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['enforce_admins'] = $value;
    
                after_enforce_admins:

                $value = $payload['required_linear_history'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_linear_history';
                    goto after_required_linear_history;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_linear_history';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_linear_history'] = $value;
    
                after_required_linear_history:

                $value = $payload['allow_force_pushes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_force_pushes';
                    goto after_allow_force_pushes;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_force_pushes';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_force_pushes'] = $value;
    
                after_allow_force_pushes:

                $value = $payload['allow_deletions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'allow_deletions';
                    goto after_allow_deletions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'allow_deletions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['allow_deletions'] = $value;
    
                after_allow_deletions:

                $value = $payload['restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'restrictions';
                    goto after_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['restrictions'] = $value;
    
                after_restrictions:

                $value = $payload['required_conversation_resolution'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'required_conversation_resolution';
                    goto after_required_conversation_resolution;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'required_conversation_resolution';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['required_conversation_resolution'] = $value;
    
                after_required_conversation_resolution:

                $value = $payload['block_creations'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'block_creations';
                    goto after_block_creations;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'block_creations';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['block_creations'] = $value;
    
                after_block_creations:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ValidationErrorSimple(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple
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

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchRequiredStatusCheck(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchRequiredStatusCheck', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchAdminEnforced(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissal_restrictions'] = $value;
    
                after_dismissal_restrictions:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner',
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Teams',
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredSignatures', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️StatusCheckPolicy(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy
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

                $value = $payload['strict'] ?? null;
    
                if ($value === null) {
                    $properties['strict'] = null;
                    goto after_strict;
                }

                $properties['strict'] = $value;
    
                after_strict:

                $value = $payload['contexts'] ?? null;
    
                if ($value === null) {
                    $properties['contexts'] = null;
                    goto after_contexts;
                }

                $properties['contexts'] = $value;
    
                after_contexts:

                $value = $payload['contexts_url'] ?? null;
    
                if ($value === null) {
                    $properties['contexts_url'] = null;
                    goto after_contexts_url;
                }

                $properties['contexts_url'] = $value;
    
                after_contexts_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews
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

                $value = $payload['dismiss_stale_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismiss_stale_reviews';
                    goto after_dismiss_stale_reviews;
                }

                $properties['dismiss_stale_reviews'] = $value;
    
                after_dismiss_stale_reviews:

                $value = $payload['require_code_owner_reviews'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'require_code_owner_reviews';
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

                $value = $payload['dismissal_restrictions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dismissal_restrictions';
                    goto after_dismissal_restrictions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dismissal_restrictions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dismissal_restrictions'] = $value;
    
                after_dismissal_restrictions:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\EnforceAdmins', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredConversationResolution', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team',
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration',
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews⚡️DismissalRestrictions(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions
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

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                static $usersCaster1;
    
                if ($usersCaster1 === null) {
                    $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser',
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['apps'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'apps';
                    goto after_apps;
                }

                static $appsCaster1;
    
                if ($appsCaster1 === null) {
                    $appsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration',
));
                }
    
                $value = $appsCaster1->cast($value, $this);

                $properties['apps'] = $value;
    
                after_apps:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection($object),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ValidationErrorSimple($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection);
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

        
        $required_status_checks = $object->required_status_checks;

        if ($required_status_checks === null) {
            goto after_required_status_checks;
        }
        $required_status_checks = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchRequiredStatusCheck($required_status_checks);
        after_required_status_checks:        $result['required_status_checks'] = $required_status_checks;

        
        $enforce_admins = $object->enforce_admins;

        if ($enforce_admins === null) {
            goto after_enforce_admins;
        }
        $enforce_admins = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchAdminEnforced($enforce_admins);
        after_enforce_admins:        $result['enforce_admins'] = $enforce_admins;

        
        $required_pull_request_reviews = $object->required_pull_request_reviews;

        if ($required_pull_request_reviews === null) {
            goto after_required_pull_request_reviews;
        }
        $required_pull_request_reviews = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranchPullRequestReview($required_pull_request_reviews);
        after_required_pull_request_reviews:        $result['required_pull_request_reviews'] = $required_pull_request_reviews;

        
        $restrictions = $object->restrictions;

        if ($restrictions === null) {
            goto after_restrictions;
        }
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $required_linear_history = $object->required_linear_history;

        if ($required_linear_history === null) {
            goto after_required_linear_history;
        }
        $required_linear_history = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_linear_history);
        after_required_linear_history:        $result['required_linear_history'] = $required_linear_history;

        
        $allow_force_pushes = $object->allow_force_pushes;

        if ($allow_force_pushes === null) {
            goto after_allow_force_pushes;
        }
        $allow_force_pushes = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_force_pushes);
        after_allow_force_pushes:        $result['allow_force_pushes'] = $allow_force_pushes;

        
        $allow_deletions = $object->allow_deletions;

        if ($allow_deletions === null) {
            goto after_allow_deletions;
        }
        $allow_deletions = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($allow_deletions);
        after_allow_deletions:        $result['allow_deletions'] = $allow_deletions;

        
        $block_creations = $object->block_creations;

        if ($block_creations === null) {
            goto after_block_creations;
        }
        $block_creations = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($block_creations);
        after_block_creations:        $result['block_creations'] = $block_creations;

        
        $required_conversation_resolution = $object->required_conversation_resolution;

        if ($required_conversation_resolution === null) {
            goto after_required_conversation_resolution;
        }
        $required_conversation_resolution = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($required_conversation_resolution);
        after_required_conversation_resolution:        $result['required_conversation_resolution'] = $required_conversation_resolution;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $protection_url = $object->protection_url;

        if ($protection_url === null) {
            goto after_protection_url;
        }
        after_protection_url:        $result['protection_url'] = $protection_url;

        
        $required_signatures = $object->required_signatures;

        if ($required_signatures === null) {
            goto after_required_signatures;
        }
        $required_signatures = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($required_signatures);
        after_required_signatures:        $result['required_signatures'] = $required_signatures;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\BasicError);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $required_status_checks = $object->required_status_checks;
        $required_status_checks = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️StatusCheckPolicy($required_status_checks);
        after_required_status_checks:        $result['required_status_checks'] = $required_status_checks;

        
        $required_pull_request_reviews = $object->required_pull_request_reviews;
        $required_pull_request_reviews = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredPullRequestReviews($required_pull_request_reviews);
        after_required_pull_request_reviews:        $result['required_pull_request_reviews'] = $required_pull_request_reviews;

        
        $required_signatures = $object->required_signatures;
        $required_signatures = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredSignatures($required_signatures);
        after_required_signatures:        $result['required_signatures'] = $required_signatures;

        
        $enforce_admins = $object->enforce_admins;
        $enforce_admins = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️EnforceAdmins($enforce_admins);
        after_enforce_admins:        $result['enforce_admins'] = $enforce_admins;

        
        $required_linear_history = $object->required_linear_history;
        $required_linear_history = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($required_linear_history);
        after_required_linear_history:        $result['required_linear_history'] = $required_linear_history;

        
        $allow_force_pushes = $object->allow_force_pushes;
        $allow_force_pushes = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($allow_force_pushes);
        after_allow_force_pushes:        $result['allow_force_pushes'] = $allow_force_pushes;

        
        $allow_deletions = $object->allow_deletions;
        $allow_deletions = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($allow_deletions);
        after_allow_deletions:        $result['allow_deletions'] = $allow_deletions;

        
        $restrictions = $object->restrictions;
        $restrictions = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchRestrictionPolicy($restrictions);
        after_restrictions:        $result['restrictions'] = $restrictions;

        
        $required_conversation_resolution = $object->required_conversation_resolution;
        $required_conversation_resolution = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredConversationResolution($required_conversation_resolution);
        after_required_conversation_resolution:        $result['required_conversation_resolution'] = $required_conversation_resolution;

        
        $block_creations = $object->block_creations;
        $block_creations = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ProtectedBranch⚡️RequiredLinearHistory($block_creations);
        after_block_creations:        $result['block_creations'] = $block_creations;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ValidationErrorSimple);
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

        
        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
