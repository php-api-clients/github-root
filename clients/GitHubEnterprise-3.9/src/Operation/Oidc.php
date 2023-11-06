<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSub;

final class Oidc
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getOidcCustomSubTemplateForOrg(string $org): OidcCustomSub
    {
        return $this->operators->oidc👷GetOidcCustomSubTemplateForOrg()->call($org);
    }

    public function updateOidcCustomSubTemplateForOrg(string $org, array $params): EmptyObject
    {
        return $this->operators->oidc👷UpdateOidcCustomSubTemplateForOrg()->call($org, $params);
    }
}
