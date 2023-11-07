<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Patch;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\Authorization;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\FullRepository;
use ApiClients\Client\GitHubAE\Schema\GlobalHook2;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): GlobalHook2|Accepted|PreReceiveEnvironment|WebhookConfig|Authorization|WithoutBody|ProjectColumn|FullRepository|BasicError
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'PATCH /admin/hooks/{hook_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'organizations') {
                    if ($pathChunks[3] === '{org}') {
                        if ($call === 'PATCH /admin/organizations/{org}') {
                            return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateOrgName($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updatePreReceiveEnvironment($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'PATCH /app/hook/config') {
                            return $this->routers->internal🔀Router🔀Patch🔀Apps()->updateWebhookConfigForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'PATCH /applications/{client_id}/token') {
                            return $this->routers->internal🔀Router🔀Patch🔀Apps()->resetToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'PATCH /notifications/threads/{thread_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Activity()->markThreadAsRead($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'PATCH /projects/columns/{column_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Projects()->updateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'PATCH /repos/{owner}/{repo}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->update($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->acceptInvitationForAuthenticatedUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
