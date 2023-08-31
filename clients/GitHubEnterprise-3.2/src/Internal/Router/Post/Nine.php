<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReview;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReviewComment;
use InvalidArgumentException;

final class Nine
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<string>|Observable<Schema\Integration>|Observable<Schema\Team>|Observable<Schema\SimpleUser>| */
    public function call(string $call, array $params, array $pathChunks): iterable|Accepted|PullRequestReviewComment|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
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
            }
        }

        throw new InvalidArgumentException();
    }
}
