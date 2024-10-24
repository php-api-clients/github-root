<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\List;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\TeamDiscussionComment>|Observable<Schema\Reaction>|Observable<Schema\CodeScanningAlertInstance> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            return $this->routers->internal🔀Router🔀List🔀Teams()->listDiscussionCommentsInOrgListing($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            return $this->routers->internal🔀Router🔀List🔀Reactions()->listForTeamDiscussionInOrgListing($params);
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
                        if ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'instances') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            return $this->routers->internal🔀Router🔀List🔀CodeScanning()->listAlertInstancesListing($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀List🔀Reactions()->listForIssueCommentListing($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀List🔀Reactions()->listForPullRequestReviewCommentListing($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_number}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            return $this->routers->internal🔀Router🔀List🔀Reactions()->listForTeamDiscussionCommentLegacyListing($params);
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
