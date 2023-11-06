<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Stream;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
                                return $this->routers->internal🔀Router🔀Stream🔀EnterpriseAdmin()->startPreReceiveEnvironmentDownloadStreaming($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
