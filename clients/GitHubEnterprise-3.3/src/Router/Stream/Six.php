<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Stream;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |Observable<string> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'STREAM /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
                                    $matched = true;
                                    if (array_key_exists(Router\Stream\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Stream\EnterpriseAdmin::class] = new Router\Stream\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Stream\EnterpriseAdmin::class]->GetDownloadStatusForPreReceiveEnvironmentStreaming($params);
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
                                    $matched = true;
                                    if (array_key_exists(Router\Stream\Repos::class, $this->router) === false) {
                                        $this->router[Router\Stream\Repos::class] = new Router\Stream\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Stream\Repos::class]->DownloadTarballArchiveStreaming($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'STREAM /repos/{owner}/{repo}/zipball/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Stream\Repos::class, $this->router) === false) {
                                        $this->router[Router\Stream\Repos::class] = new Router\Stream\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Stream\Repos::class]->DownloadZipballArchiveStreaming($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
