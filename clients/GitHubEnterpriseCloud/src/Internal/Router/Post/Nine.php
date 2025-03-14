<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Post;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAutofixCommitsResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Nine
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<string>|Observable<Schema\Integration>|Observable<Schema\Team>|Observable<Schema\SimpleUser> */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|iterable|CodeScanningAutofixCommitsResponse|Json|PullRequestReviewComment|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($pathChunks[8] === 'restore') {
                                            if ($call === 'POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
                                                return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageVersionForOrg($params);
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
                                            if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                return $this->routers->internal🔀Router🔀Post🔀Repos()->addStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                return $this->routers->internal🔀Router🔀Post🔀Repos()->addAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                return $this->routers->internal🔀Router🔀Post🔀Repos()->addTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                return $this->routers->internal🔀Router🔀Post🔀Repos()->addUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'autofix') {
                                        if ($pathChunks[8] === 'commits') {
                                            if ($call === 'POST /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/autofix/commits') {
                                                return $this->routers->internal🔀Router🔀Post🔀CodeScanning()->commitAutofix($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'deliveries') {
                                    if ($pathChunks[7] === '{delivery_id}') {
                                        if ($pathChunks[8] === 'attempts') {
                                            if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
                                                return $this->routers->internal🔀Router🔀Post🔀Repos()->redeliverWebhookDelivery($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($pathChunks[7] === '{comment_id}') {
                                        if ($pathChunks[8] === 'replies') {
                                            if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies') {
                                                return $this->routers->internal🔀Router🔀Post🔀Pulls()->createReplyForReviewComment($params);
                                            }
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($pathChunks[8] === 'events') {
                                            if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events') {
                                                return $this->routers->internal🔀Router🔀Post🔀Pulls()->submitReview($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($pathChunks[8] === 'restore') {
                                            if ($call === 'POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
                                                return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageVersionForUser($params);
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
