<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAlert;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\DependabotAlert;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GitRef;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\IssueComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PorterAuthor;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ReleaseAsset;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningAlert;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): TeamDiscussion|GroupMapping|WithoutBody|CodeScanningAlert|DependabotAlert|GitRef|WebhookConfig|PorterAuthor|IssueComment|PullRequestReviewComment|ReleaseAsset|SecretScanningAlert|ScimUser|TeamDiscussionComment
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
                            } elseif ($pathChunks[5] === 'team-sync') {
                                if ($pathChunks[6] === 'group-mappings') {
                                    if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/team-sync/group-mappings') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Teams()->createOrUpdateIdpGroupConnectionsInOrg($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/actions/variables/{name}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateRepoVariable($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀CodeScanning()->updateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Dependabot()->updateAlert($params);
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
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'authors') {
                                if ($pathChunks[6] === '{author_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/import/authors/{author_id}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Migrations()->mapCommitAuthor($params);
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
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateEnvironmentVariable($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'organizations') {
                        if ($pathChunks[4] === '{org}') {
                            if ($pathChunks[5] === 'Users') {
                                if ($pathChunks[6] === '{scim_user_id}') {
                                    if ($call === 'PATCH /scim/v2/organizations/{org}/Users/{scim_user_id}') {
                                        return $this->routers->internal🔀Router🔀Patch🔀Scim()->updateAttributeForUser($params);
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
