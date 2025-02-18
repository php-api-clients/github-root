<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\List;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\CheckAnnotation>|Observable<Schema\Reaction>|Observable<Schema\CommitComment>|Observable<Schema\PullRequestSimple>|Observable<Schema\Status>|Schema\BasicError|Observable<Schema\DeploymentStatus>|Observable<Schema\GitRef>|Observable<Schema\IssueComment>|Observable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent>|Observable<Schema\Label>|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent>|Observable<Schema\PullRequestReviewComment>|Observable<Schema\Commit>|Observable<Schema\DiffEntry>|Observable<Schema\PullRequestReview>|Observable<Schema\ReleaseAsset> */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($pathChunks[6] === 'annotations') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
                                        return $this->routers->internal🔀Router🔀List🔀Checks()->listAnnotationsListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        return $this->routers->internal🔀Router🔀List🔀Reactions()->listForCommitCommentListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{commit_sha}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        return $this->routers->internal🔀Router🔀List🔀Repos()->listCommentsForCommitListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'pulls') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
                                        return $this->routers->internal🔀Router🔀List🔀Repos()->listPullRequestsAssociatedWithCommitListing($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{ref}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{ref}/statuses') {
                                        return $this->routers->internal🔀Router🔀List🔀Repos()->listCommitStatusesForRefListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        return $this->routers->internal🔀Router🔀List🔀Repos()->listDeploymentStatusesListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'matching-refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/git/matching-refs/{ref}') {
                                        return $this->routers->internal🔀Router🔀List🔀Git()->listMatchingRefsListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        return $this->routers->internal🔀Router🔀List🔀Issues()->listCommentsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'events') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/events') {
                                        return $this->routers->internal🔀Router🔀List🔀Issues()->listEventsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        return $this->routers->internal🔀Router🔀List🔀Issues()->listLabelsOnIssueListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        return $this->routers->internal🔀Router🔀List🔀Reactions()->listForIssueListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'timeline') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
                                        return $this->routers->internal🔀Router🔀List🔀Issues()->listEventsForTimelineListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
                                        return $this->routers->internal🔀Router🔀List🔀Issues()->listLabelsForMilestoneListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        return $this->routers->internal🔀Router🔀List🔀Pulls()->listReviewCommentsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'commits') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
                                        return $this->routers->internal🔀Router🔀List🔀Pulls()->listCommitsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'files') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/files') {
                                        return $this->routers->internal🔀Router🔀List🔀Pulls()->listFilesListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        return $this->routers->internal🔀Router🔀List🔀Pulls()->listReviewsListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'assets') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        return $this->routers->internal🔀Router🔀List🔀Repos()->listReleaseAssetsListing($params);
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
