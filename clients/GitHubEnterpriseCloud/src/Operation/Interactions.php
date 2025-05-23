<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Interactions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getRestrictionsForOrg(string $org): InteractionLimitResponse|One
    {
        return $this->operators->interactions👷GetRestrictionsForOrg()->call($org);
    }

    /** @return */
    public function setRestrictionsForOrg(string $org, array $params): InteractionLimitResponse
    {
        return $this->operators->interactions👷SetRestrictionsForOrg()->call($org, $params);
    }

    /** @return */
    public function removeRestrictionsForOrg(string $org): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForOrg()->call($org);
    }

    /** @return */
    public function getRestrictionsForRepo(string $owner, string $repo): InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One
    {
        return $this->operators->interactions👷GetRestrictionsForRepo()->call($owner, $repo);
    }

    /** @return */
    public function setRestrictionsForRepo(string $owner, string $repo, array $params): InteractionLimitResponse|WithoutBody
    {
        return $this->operators->interactions👷SetRestrictionsForRepo()->call($owner, $repo, $params);
    }

    /** @return */
    public function removeRestrictionsForRepo(string $owner, string $repo): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForRepo()->call($owner, $repo);
    }

    /** @return */
    public function getRestrictionsForAuthenticatedUser(): InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|WithoutBody
    {
        return $this->operators->interactions👷GetRestrictionsForAuthenticatedUser()->call();
    }

    /** @return */
    public function setRestrictionsForAuthenticatedUser(array $params): InteractionLimitResponse
    {
        return $this->operators->interactions👷SetRestrictionsForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function removeRestrictionsForAuthenticatedUser(): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForAuthenticatedUser()->call();
    }
}
