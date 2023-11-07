<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\List;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<int,Schema\CodeScanningOrganizationAlertItems>|iterable<int,Schema\ProjectCard>|WithoutBody|iterable<int,Schema\SimpleUser>|iterable<int,Schema\ShortBranch>|iterable<int,Schema\Collaborator>|iterable<int,Schema\CommitComment>|iterable<int,Schema\Commit>|iterable<int,Schema\Contributor>|iterable<int,Schema\Deployment>|iterable<int,Schema\Event>|iterable<int,Schema\MinimalRepository>|iterable<int,Schema\Hook>|iterable<int,Schema\RepositoryInvitation>|iterable<int,Schema\Issue>|Schema\BasicError|iterable<int,Schema\DeployKey>|iterable<int,Schema\Label>|iterable<int,Schema\Milestone>|iterable<int,Schema\Thread>|iterable<int,Schema\Project>|iterable<int,Schema\PullRequestSimple>|iterable<int,Schema\Release>|iterable<int,Schema\Tag>|iterable<int,Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): iterable|WithoutBody|BasicError
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀List🔀CodeScanning()->listAlertsForOrgListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'LIST /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀List🔀Projects()->listCardsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listAssigneesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'LIST /repos/{owner}/{repo}/branches') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listBranchesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCollaboratorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/comments') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCommitCommentsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'LIST /repos/{owner}/{repo}/commits') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCommitsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listContributorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listDeploymentsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /repos/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listRepoEventsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listForksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listWebhooksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listInvitationsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'LIST /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'LIST /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listDeployKeysListing($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'LIST /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listLabelsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listMilestonesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listRepoNotificationsForAuthenticatedUserListing($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'LIST /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀List🔀Projects()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀List🔀Pulls()->listListing($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'LIST /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listReleasesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listWatchersForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'LIST /repos/{owner}/{repo}/tags') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listTagsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'LIST /repos/{owner}/{repo}/teams') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listTeamsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'LIST /user/migrations/{migration_id}/repositories') {
                                return $this->routers->internal🔀Router🔀List🔀Migrations()->listReposForAuthenticatedUserListing($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
