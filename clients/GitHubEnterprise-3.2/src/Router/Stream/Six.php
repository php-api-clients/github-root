<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Stream;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<string> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
                                    return $this->routers->router🔀Stream🔀EnterpriseAdmin()->getDownloadStatusForPreReceiveEnvironmentStreaming($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'tarball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'STREAM /repos/{owner}/{repo}/tarball/{ref}') {
                                    return $this->routers->router🔀Stream🔀Repos()->downloadTarballArchiveStreaming($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'STREAM /repos/{owner}/{repo}/zipball/{ref}') {
                                    return $this->routers->router🔀Stream🔀Repos()->downloadZipballArchiveStreaming($params);
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
