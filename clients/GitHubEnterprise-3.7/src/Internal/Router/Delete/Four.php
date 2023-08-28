<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): BasicError|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'DELETE /admin/hooks/{hook_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_ids}') {
                        if ($call === 'DELETE /admin/keys/{key_ids}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deletePublicKey($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deletePreReceiveEnvironment($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($pathChunks[3] === '{pre_receive_hook_id}') {
                        if ($call === 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deletePreReceiveHook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($pathChunks[3] === '{token_id}') {
                        if ($call === 'DELETE /admin/tokens/{token_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deletePersonalAccessToken($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'DELETE /admin/users/{username}') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'DELETE /app/installations/{installation_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Apps()->deleteInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === 'grants') {
                    if ($pathChunks[3] === '{grant_id}') {
                        if ($call === 'DELETE /applications/grants/{grant_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀OauthAuthorizations()->deleteGrant($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'grant') {
                        if ($call === 'DELETE /applications/{client_id}/grant') {
                            return $this->routers->internal🔀Router🔀Delete🔀Apps()->deleteAuthorization($params);
                        }
                    } elseif ($pathChunks[3] === 'token') {
                        if ($call === 'DELETE /applications/{client_id}/token') {
                            return $this->routers->internal🔀Router🔀Delete🔀Apps()->deleteToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'DELETE /gists/{gist_id}/star') {
                            return $this->routers->internal🔀Router🔀Delete🔀Gists()->unstar($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'DELETE /projects/columns/{column_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Projects()->deleteColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'DELETE /repos/{owner}/{repo}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->delete($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'DELETE /user/following/{username}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Users()->unfollow($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'DELETE /user/gpg_keys/{gpg_key_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Users()->deleteGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'DELETE /user/keys/{key_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Users()->deletePublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'DELETE /user/repository_invitations/{invitation_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->declineInvitationForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($pathChunks[3] === '{ssh_signing_key_id}') {
                        if ($call === 'DELETE /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            return $this->routers->internal🔀Router🔀Delete🔀Users()->deleteSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'site_admin') {
                        if ($call === 'DELETE /users/{username}/site_admin') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->demoteSiteAdministrator($params);
                        }
                    } elseif ($pathChunks[3] === 'suspended') {
                        if ($call === 'DELETE /users/{username}/suspended') {
                            return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->unsuspendUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
