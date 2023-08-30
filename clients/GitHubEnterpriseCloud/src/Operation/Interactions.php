<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;

final class Interactions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getRestrictionsForOrg(string $org): InteractionLimitResponse|One|array
    {
        return $this->operators->interactions👷GetRestrictionsForOrg()->call($org);
    }

    /** @return */
    public function setRestrictionsForOrg(string $org, array $params): InteractionLimitResponse|array
    {
        return $this->operators->interactions👷SetRestrictionsForOrg()->call($org, $params);
    }

    /** @return array{code:int} */
    public function removeRestrictionsForOrg(string $org): array
    {
        return $this->operators->interactions👷RemoveRestrictionsForOrg()->call($org);
    }

    /** @return */
    public function getRestrictionsForRepo(string $owner, string $repo): InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One|array
    {
        return $this->operators->interactions👷GetRestrictionsForRepo()->call($owner, $repo);
    }

    /** @return Schema\InteractionLimitResponse|array{code:int} */
    public function setRestrictionsForRepo(string $owner, string $repo, array $params): InteractionLimitResponse|array
    {
        return $this->operators->interactions👷SetRestrictionsForRepo()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function removeRestrictionsForRepo(string $owner, string $repo): array
    {
        return $this->operators->interactions👷RemoveRestrictionsForRepo()->call($owner, $repo);
    }

    /** @return Schema\InteractionLimitResponse|Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|array{code:int} */
    public function getRestrictionsForAuthenticatedUser(): InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|array
    {
        return $this->operators->interactions👷GetRestrictionsForAuthenticatedUser()->call();
    }

    /** @return */
    public function setRestrictionsForAuthenticatedUser(array $params): InteractionLimitResponse|array
    {
        return $this->operators->interactions👷SetRestrictionsForAuthenticatedUser()->call($params);
    }

    /** @return array{code:int} */
    public function removeRestrictionsForAuthenticatedUser(): array
    {
        return $this->operators->interactions👷RemoveRestrictionsForAuthenticatedUser()->call();
    }
}
