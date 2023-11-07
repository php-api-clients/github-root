<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OidcCustomSub;

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
