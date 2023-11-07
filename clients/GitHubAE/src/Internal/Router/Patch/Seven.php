<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Patch;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubAE\Schema\GitRef;
use ApiClients\Client\GitHubAE\Schema\IssueComment;
use ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHubAE\Schema\ReleaseAsset;
use ApiClients\Client\GitHubAE\Schema\SecretScanningAlert;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussion;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): TeamDiscussion|CodeScanningAlert|GitRef|WebhookConfig|IssueComment|PullRequestReviewComment|ReleaseAsset|SecretScanningAlert|WithoutBody|TeamDiscussionComment
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateDiscussionInOrg($params);
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
                                    if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀CodeScanning()->updateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/git/refs/{ref}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Git()->updateRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'config') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateWebhookConfigForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Issues()->updateComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Pulls()->updateReviewComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'assets') {
                                if ($pathChunks[6] === '{asset_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateReleaseAsset($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀SecretScanning()->updateAlert($params);
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
                                    if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateDiscussionCommentLegacy($params);
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
