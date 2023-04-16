<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Get;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Cc8
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubAE\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubAE\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
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
                                        if ($call == 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            if (\array_key_exists(Router\Get\Teams::class, $this->router) == false) {
                                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Teams::class]->listDiscussionCommentsInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] == 'reactions') {
                                        if ($call == 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            if (\array_key_exists(Router\Get\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionInOrg($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'repos') {
                                if ($pathChunks[6] == '{owner}') {
                                    if ($pathChunks[7] == '{repo}') {
                                        if ($call == 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            if (\array_key_exists(Router\Get\Teams::class, $this->router) == false) {
                                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Teams::class]->checkPermissionsForRepoInOrg($params);
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
                            if ($pathChunks[5] == 'artifacts') {
                                if ($pathChunks[6] == '{artifact_id}') {
                                    if ($pathChunks[7] == '{archive_format}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadArtifact($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'jobs') {
                                if ($pathChunks[6] == '{job_id}') {
                                    if ($pathChunks[7] == 'logs') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadJobLogsForWorkflowRun($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'runs') {
                                if ($pathChunks[6] == '{run_id}') {
                                    if ($pathChunks[7] == 'artifacts') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->listWorkflowRunArtifacts($params);
                                        }
                                    } elseif ($pathChunks[7] == 'jobs') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->listJobsForWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] == 'logs') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadWorkflowRunLogs($params);
                                        }
                                    } elseif ($pathChunks[7] == 'timing') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->getWorkflowRunUsage($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'workflows') {
                                if ($pathChunks[6] == '{workflow_id}') {
                                    if ($pathChunks[7] == 'runs') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->listWorkflowRuns($params);
                                        }
                                    } elseif ($pathChunks[7] == 'timing') {
                                        if ($call == 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->getWorkflowUsage($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($pathChunks[7] == 'enforce_admins') {
                                        if ($call == 'GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_pull_request_reviews') {
                                        if ($call == 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getPullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_signatures') {
                                        if ($call == 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_status_checks') {
                                        if ($call == 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getStatusChecksProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'restrictions') {
                                        if ($call == 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'code-scanning') {
                            if ($pathChunks[5] == 'alerts') {
                                if ($pathChunks[6] == '{alert_number}') {
                                    if ($pathChunks[7] == 'instances') {
                                        if ($call == 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            if (\array_key_exists(Router\Get\CodeScanning::class, $this->router) == false) {
                                                $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\CodeScanning::class]->listAlertInstances($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'deployments') {
                            if ($pathChunks[5] == '{deployment_id}') {
                                if ($pathChunks[6] == 'statuses') {
                                    if ($pathChunks[7] == '{status_id}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getDeploymentStatus($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'environments') {
                            if ($pathChunks[5] == '{environment_name}') {
                                if ($pathChunks[6] == 'deployment-branch-policies') {
                                    if ($pathChunks[7] == '{branch_policy_id}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getDeploymentBranchPolicy($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($pathChunks[6] == 'deliveries') {
                                    if ($pathChunks[7] == '{delivery_id}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}') {
                                            if (\array_key_exists(Router\Get\Repos::class, $this->router) == false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Repos::class]->getWebhookDelivery($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($pathChunks[7] == 'reactions') {
                                        if ($call == 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            if (\array_key_exists(Router\Get\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Reactions::class]->listForIssueComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == '{issue_number}') {
                                if ($pathChunks[6] == 'assignees') {
                                    if ($pathChunks[7] == '{assignee}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}') {
                                            if (\array_key_exists(Router\Get\Issues::class, $this->router) == false) {
                                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Issues::class]->checkUserCanBeAssignedToIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($pathChunks[7] == 'reactions') {
                                        if ($call == 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            if (\array_key_exists(Router\Get\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Reactions::class]->listForPullRequestReviewComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'reviews') {
                                    if ($pathChunks[7] == '{review_id}') {
                                        if ($call == 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            if (\array_key_exists(Router\Get\Pulls::class, $this->router) == false) {
                                                $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Pulls::class]->getReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'secret-scanning') {
                            if ($pathChunks[5] == 'alerts') {
                                if ($pathChunks[6] == '{alert_number}') {
                                    if ($pathChunks[7] == 'locations') {
                                        if ($call == 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
                                            if (\array_key_exists(Router\Get\SecretScanning::class, $this->router) == false) {
                                                $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\SecretScanning::class]->listLocationsForAlert($params);
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
