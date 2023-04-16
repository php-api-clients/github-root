<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\ChunkSize\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
use ApiClients\Client\GitHubEnterpriseCloud\Router;
use ApiClients\Client\GitHubEnterpriseCloud\ChunkSize;
final class Cc10
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubEnterpriseCloud\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubEnterpriseCloud\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
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
                                        if ($pathChunks[8] == '{comment_number}') {
                                            if ($pathChunks[9] == 'reactions') {
                                                if ($call == 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                                    if (\array_key_exists(Router\Get\Reactions::class, $this->router) == false) {
                                                        $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                    }
                                                    return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionCommentInOrg($params);
                                                }
                                            }
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
                                    if ($pathChunks[7] == 'attempts') {
                                        if ($pathChunks[8] == '{attempt_number}') {
                                            if ($pathChunks[9] == 'jobs') {
                                                if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs') {
                                                    if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                    }
                                                    return $this->router[Router\Get\Actions::class]->listJobsForWorkflowRunAttempt($params);
                                                }
                                            } elseif ($pathChunks[9] == 'logs') {
                                                if ($call == 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs') {
                                                    if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                    }
                                                    return $this->router[Router\Get\Actions::class]->downloadWorkflowRunAttemptLogs($params);
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
        }
        throw new \InvalidArgumentException();
    }
}
