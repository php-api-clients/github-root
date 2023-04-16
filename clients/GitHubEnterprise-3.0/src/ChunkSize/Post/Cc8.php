<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\ChunkSize\Post;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class Cc8
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'discussions') {
                                if ($pathChunks[6] == '{discussion_number}') {
                                    if ($pathChunks[7] == 'comments') {
                                        if ($call == 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            if (\array_key_exists(Router\Post\Teams::class, $this->router) == false) {
                                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Teams::class]->createDiscussionCommentInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] == 'reactions') {
                                        if ($call == 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Reactions::class]->createForTeamDiscussionInOrg($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'runs') {
                                if ($pathChunks[6] == '{run_id}') {
                                    if ($pathChunks[7] == 'cancel') {
                                        if ($call == 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel') {
                                            if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Actions::class]->cancelWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] == 'rerun') {
                                        if ($call == 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun') {
                                            if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Actions::class]->reRunWorkflow($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'workflows') {
                                if ($pathChunks[6] == '{workflow_id}') {
                                    if ($pathChunks[7] == 'dispatches') {
                                        if ($call == 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches') {
                                            if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Actions::class]->createWorkflowDispatch($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($pathChunks[7] == 'enforce_admins') {
                                        if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Repos::class]->setAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_signatures') {
                                        if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Repos::class]->createCommitSignatureProtection($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($pathChunks[7] == 'reactions') {
                                        if ($call == 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Reactions::class]->createForIssueComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($pathChunks[7] == 'reactions') {
                                        if ($call == 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Reactions::class]->createForPullRequestReviewComment($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'discussions') {
                        if ($pathChunks[4] == '{discussion_number}') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_number}') {
                                    if ($pathChunks[7] == 'reactions') {
                                        if ($call == 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Post\Reactions::class]->createForTeamDiscussionCommentLegacy($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
