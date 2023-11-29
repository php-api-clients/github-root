<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Post;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\CommitComment;
use ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHubAE\Schema\DeploymentStatus;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
use ApiClients\Client\GitHubAE\Schema\Issue;
use ApiClients\Client\GitHubAE\Schema\IssueComment;
use ApiClients\Client\GitHubAE\Schema\PullRequestReview;
use ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHubAE\Schema\PullRequestSimple;
use ApiClients\Client\GitHubAE\Schema\Reaction;
use ApiClients\Client\GitHubAE\Schema\ReleaseAsset;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\DeploymentBranchPolicy|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|Observable<Schema\Label>|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): AuthenticationToken|EmptyObject|Reaction|CommitComment|DeploymentStatus|DeploymentBranchPolicy|WithoutBody|Issue|IssueComment|iterable|BasicError|PullRequestReviewComment|PullRequestSimple|PullRequestReview|ReleaseAsset
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === 'registration-token') {
                                    if ($call === 'POST /repos/{owner}/{repo}/actions/runners/registration-token') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->createRegistrationTokenForRepo($params);
                                    }
                                } elseif ($pathChunks[6] === 'remove-token') {
                                    if ($call === 'POST /repos/{owner}/{repo}/actions/runners/remove-token') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->createRemoveTokenForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($pathChunks[6] === 'rerequest') {
                                    if ($call === 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest') {
                                        return $this->routers->internal🔀Router🔀Post🔀Checks()->rerequestRun($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($pathChunks[6] === 'rerequest') {
                                    if ($call === 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest') {
                                        return $this->routers->internal🔀Router🔀Post🔀Checks()->rerequestSuite($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{commit_sha}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeploymentStatus($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeploymentBranchPolicy($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'pings') {
                                    if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->pingWebhook($params);
                                    }
                                } elseif ($pathChunks[6] === 'tests') {
                                    if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->testPushWebhook($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->addAssignees($params);
                                    }
                                } elseif ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->createComment($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->addLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForIssue($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->createReviewComment($params);
                                    }
                                } elseif ($pathChunks[6] === 'requested_reviewers') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->requestReviewers($params);
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->createReview($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'assets') {
                                    if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->uploadReleaseAsset($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForRelease($params);
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
