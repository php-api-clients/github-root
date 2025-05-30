<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Issue;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\StatusCheckPolicy;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): ProtectedBranchPullRequestReview|StatusCheckPolicy|WithoutBody|Issue
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->updatePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateStatusCheckProtection($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'variables') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateEnvironmentVariable($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'sub_issues') {
                                    if ($pathChunks[7] === 'priority') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}/sub_issues/priority') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Issues()->reprioritizeSubIssue($params);
                                        }
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
