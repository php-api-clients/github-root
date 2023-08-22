<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Delete;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Nine
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}|Observable<string>|Observable<Schema\Integration>|Observable<Schema\Team>|Observable<Schema\SimpleUser> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($pathChunks[8] === '{comment_number}') {
                                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Teams::class]->DeleteDiscussionCommentInOrg($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->DeleteForTeamDiscussion($params);
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
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->RemoveStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->RemoveAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->RemoveTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Repos::class]->RemoveUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->DeleteForIssueComment($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($pathChunks[8] === '{reaction_id}') {
                                            if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}') {
                                                $matched = true;
                                                if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                    $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Delete\Reactions::class]->DeleteForPullRequestComment($params);
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

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
