<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\TeamDiscussion>|iterable<Schema\SimpleUser>|iterable<Schema\TeamProject>|iterable<Schema\MinimalRepository>|iterable<Schema\Team>|iterable<Schema\CodeScanningAlertItems>|iterable<Schema\CodeScanningAnalysis>|iterable<Schema\IssueComment>|iterable<Schema\IssueEvent>|iterable<Schema\PageBuild>|iterable<Schema\PullRequestReviewComment>|(iterable<Schema\SecretScanningAlert>|array{code: int})|iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|iterable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListDiscussionsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/members') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListMembersInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/projects') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListProjectsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/repos') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListReposInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListChildInOrgListing($params);
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
                                    $matched = true;
                                    if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\CodeScanning::class]->ListAlertsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/analyses') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\CodeScanning::class]->ListRecentAnalysesListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                        $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Issues::class]->ListCommentsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/events') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                        $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Issues::class]->ListEventsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pages/builds') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                        $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Repos::class]->ListPagesBuildsListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                        $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Pulls::class]->ListReviewCommentsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\SecretScanning::class, $this->router) === false) {
                                        $this->router[Router\List\SecretScanning::class] = new Router\List\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\SecretScanning::class]->ListAlertsForRepoListing($params);
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
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListDiscussionCommentsLegacyListing($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                        $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Reactions::class]->ListForTeamDiscussionLegacyListing($params);
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
                                    $matched = true;
                                    if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                        $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Activity::class]->ListOrgEventsForAuthenticatedUserListing($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
