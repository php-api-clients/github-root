<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\List;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use InvalidArgumentException;

final class Nine
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\ReviewComment> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($pathChunks[8] === 'comments') {
                                            if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments') {
                                                return $this->routers->internal🔀Router🔀List🔀Pulls()->listCommentsForReviewListing($params);
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

        throw new InvalidArgumentException();
    }
}
