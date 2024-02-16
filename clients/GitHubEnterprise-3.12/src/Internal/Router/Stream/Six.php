<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Stream;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus|iterable<int,string> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
                                    return $this->routers->internal🔀Router🔀Stream🔀EnterpriseAdmin()->getDownloadStatusForPreReceiveEnvironmentStreaming($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'STREAM /orgs/{org}/migrations/{migration_id}/archive') {
                                    return $this->routers->internal🔀Router🔀Stream🔀Migrations()->downloadArchiveForOrgStreaming($params);
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
                                    return $this->routers->internal🔀Router🔀Stream🔀Repos()->downloadTarballArchiveStreaming($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'STREAM /repos/{owner}/{repo}/zipball/{ref}') {
                                    return $this->routers->internal🔀Router🔀Stream🔀Repos()->downloadZipballArchiveStreaming($params);
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
