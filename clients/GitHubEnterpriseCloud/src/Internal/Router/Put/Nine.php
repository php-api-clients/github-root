<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Put;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CustomProperty;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReview;
use InvalidArgumentException;

final class Nine
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<string>|Observable<Schema\Integration>|Observable<Schema\Team>|Observable<Schema\SimpleUser> */
    public function call(string $call, array $params, array $pathChunks): CustomProperty|iterable|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($pathChunks[6] === '{org}') {
                                    if ($pathChunks[7] === '{custom_property_name}') {
                                        if ($pathChunks[8] === 'promote') {
                                            if ($call === 'PUT /enterprises/{enterprise}/properties/schema/organizations/{org}/{custom_property_name}/promote') {
                                                return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->promoteCustomPropertyToEnterprise($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_status_checks') {
                                        if ($pathChunks[8] === 'contexts') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                return $this->routers->internal🔀Router🔀Put🔀Repos()->setStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                return $this->routers->internal🔀Router🔀Put🔀Repos()->setAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                return $this->routers->internal🔀Router🔀Put🔀Repos()->setTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                return $this->routers->internal🔀Router🔀Put🔀Repos()->setUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($pathChunks[8] === 'dismissals') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals') {
                                                return $this->routers->internal🔀Router🔀Put🔀Pulls()->dismissReview($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
