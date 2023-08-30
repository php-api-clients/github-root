<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\List;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\MinimalRepository>|Observable<Schema\TeamDiscussion>|Observable<Schema\SimpleUser>|Observable<Schema\TeamProject>|Observable<Schema\Team>|Observable<Schema\CodeScanningAlertItems>|array{code:int}|Observable<Schema\CodeScanningAnalysis>|Observable<Schema\DependabotAlert>|Observable<Schema\IssueComment>|Observable<Schema\IssueEvent>|Observable<Schema\PageBuild>|Observable<Schema\PullRequestReviewComment>|Observable<Schema\Operations\Repos\ListCacheInfo\Response\ApplicationJson\Ok>|Observable<Schema\SecretScanningAlert>|Observable<Schema\TeamDiscussionComment>|Observable<Schema\Reaction>|Observable<Schema\PackageVersion>|Observable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'LIST /orgs/{org}/migrations/{migration_id}/repositories') {
                                    return $this->routers->internal🔀Router🔀List🔀Migrations()->listReposForOrgListing($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listDiscussionsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/members') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listMembersInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/projects') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listProjectsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/repos') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listReposInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/teams') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listChildInOrgListing($params);
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
                                if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀List🔀CodeScanning()->listAlertsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/analyses') {
                                    return $this->routers->internal🔀Router🔀List🔀CodeScanning()->listRecentAnalysesListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/dependabot/alerts') {
                                    return $this->routers->internal🔀Router🔀List🔀Dependabot()->listAlertsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/comments') {
                                    return $this->routers->internal🔀Router🔀List🔀Issues()->listCommentsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/events') {
                                    return $this->routers->internal🔀Router🔀List🔀Issues()->listEventsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pages/builds') {
                                    return $this->routers->internal🔀Router🔀List🔀Repos()->listPagesBuildsListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments') {
                                    return $this->routers->internal🔀Router🔀List🔀Pulls()->listReviewCommentsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'replicas') {
                            if ($pathChunks[5] === 'caches') {
                                if ($call === 'LIST /repos/{owner}/{repo}/replicas/caches') {
                                    return $this->routers->internal🔀Router🔀List🔀Repos()->listCacheInfoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀List🔀SecretScanning()->listAlertsForRepoListing($params);
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
                                if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    return $this->routers->internal🔀Router🔀List🔀Teams()->listDiscussionCommentsLegacyListing($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    return $this->routers->internal🔀Router🔀List🔀Reactions()->listForTeamDiscussionLegacyListing($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($call === 'LIST /user/packages/{package_type}/{package_name}/versions') {
                                    return $this->routers->internal🔀Router🔀List🔀Packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUserListing($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'orgs') {
                            if ($pathChunks[5] === '{org}') {
                                if ($call === 'LIST /users/{username}/events/orgs/{org}') {
                                    return $this->routers->internal🔀Router🔀List🔀Activity()->listOrgEventsForAuthenticatedUserListing($params);
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
