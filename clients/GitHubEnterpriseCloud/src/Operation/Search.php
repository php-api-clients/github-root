<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Code\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Search
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function code(string $q, string $sort, string $order, int $perPage, int $page): Ok|WithoutBody
    {
        return $this->operators->search👷Code()->call($q, $sort, $order, $perPage, $page);
    }

    /** @return */
    public function commits(string $q, string $sort, string $order, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷Commits()->call($q, $sort, $order, $perPage, $page);
    }

    /** @return */
    public function issuesAndPullRequests(string $q, string $sort, string $advancedSearch, string $order, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷IssuesAndPullRequests()->call($q, $sort, $advancedSearch, $order, $perPage, $page);
    }

    /** @return */
    public function labels(int $repositoryId, string $q, string $sort, string $order, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷Labels()->call($repositoryId, $q, $sort, $order, $perPage, $page);
    }

    /** @return */
    public function repos(string $q, string $sort, string $order, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷Repos()->call($q, $sort, $order, $perPage, $page);
    }

    /** @return */
    public function topics(string $q, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷Topics()->call($q, $perPage, $page);
    }

    /** @return */
    public function users(string $q, string $sort, string $order, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->search👷Users()->call($q, $sort, $order, $perPage, $page);
    }
}
