<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ApiOverview\Domains;
use ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints;

/**
 * @property bool $verifiablePasswordAuthentication
 * @property ?SshKeyFingerprints $sshKeyFingerprints
 * @property ?array $sshKeys
 * @property ?array $hooks
 * @property ?array $githubEnterpriseImporter
 * @property ?array $web
 * @property ?array $api
 * @property ?array $git
 * @property ?array $packages
 * @property ?array $pages
 * @property ?array $importer
 * @property ?array $actions
 * @property ?array $actionsMacos
 * @property ?array $codespaces
 * @property ?array $dependabot
 * @property ?array $copilot
 * @property ?Domains $domains
 */
interface ApiOverview
{
}
